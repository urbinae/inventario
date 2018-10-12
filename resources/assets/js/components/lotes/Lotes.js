import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router, Link, Route} from 'react-router-dom';

import axios from 'axios';
import SuccessAlert from '../messages/SuccessAlert';
import ErrorAlert from '../messages/ErrorAlert';

export default class Lotes extends Component {
    constructor(){
    	super();
    	this.state={
    		lotes: [],
    		activePage: 3,
    		itemsCountPerPage:1,
		    totalItemsCount:1,
		    pageRangeDisplayed:3,
		    alert_message: ''
    	}
    	this.handlePageChange = this.handlePageChange.bind(this);
    }

    componentDidMount(){
    	axios.get('/lotes')
    		.then(resp => {
    		this.setState({
    				activePage: resp.data.current_page,
    				lotes: resp.data.data,
    				itemsCountPerPage: resp.data.per_page,
    				totalItemsCount: resp.data.total
    			});
    	});
    }

    onDelete(lote_id){
    	axios.delete('/lotes/'+lote_id).then(resp => {
    		let lotes = this.state.lotes;
    		for (var i = 0; i < lotes.length; i++) {
    			if(lotes[i].id == lote_id){
    				lotes.splice(i, 1);
    				this.setState({lotes:lotes});
    			}
    		}
    		this.setState({alert_message: "success"})
    	}).catch(error => {
    	 	this.setState({alert_message: "error"})
    	});
    
    }

    handlePageChange(pageNumber) {
	    console.log(`active page is ${pageNumber}`);
	    //first_page_url": "http://localhost:8000/lotes?page=1",
	    axios.get('/lotes?page='+pageNumber)
	    	.then(resp => {
    			this.setState({
    				activePage: pageNumber,
    				lotes: resp.data.data,
    				itemsCountPerPage: resp.data.per_page,
    				totalItemsCount: resp.data.total
    			});
    	});
	 }

    render() {    	    	
        return (
            <div>
            	{this.state.alert_message == 'success' ? <SuccessAlert message={'Eliminado con éxito'}/> : null}
            	{this.state.alert_message == 'error' ? <ErrorAlert message={'No se eliminó'}/> : null}
                <table className="table">
				  <thead>
				    <tr>
				      <th scope="col">Nombre del lote</th>
				      <th scope="col">Cantidad</th>
				      <th scope="col">Acción</th>
				    </tr>
				  </thead>
				  <tbody>
				  {
				  	this.state.lotes.map(lote => {
				  		return (
						    <tr key={lote.id}>
						      <td>{lote.name}</td>
						      <td>{lote.cant} {lote.unity}</td>
						      <td>
                                 <Link to={`/lotes/${lote.id}`} className="btn btn-sm btn-default">Ver</Link>
                                 <Route exact path="/lotes/:id"></Route>
						      </td>
						    </tr>
						)
					})
				   } 
				  </tbody>
				</table>
            </div>
        );
    }
}

if (document.getElementById('lotes-component')) {
    ReactDOM.render(<Router><Lotes /></Router>, document.getElementById('lotes-component'));
}
