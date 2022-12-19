import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';

class AxioGet_customer extends Component {
  state = {
        posts: []
      }
    
      componentDidMount() {
        axios.get('http://pankaj.project/api/customer/list')
        .then(response => {
          const posts = response.data;
          this.setState({posts});
         
        })
      }
   
        render(){
          return(
              <table class="table">
              <thead>
                  <tr class="bg-primary">
                      <th scope="col">ID</th>
                      <th scope="col">NID</th>
                      <th scope="col">age</th>
                      <th scope="col">mobile</th>
                      <th scope="col">address</th>
                  </tr>
              </thead>
              <tbody>
                  {this.state.posts && this.state.posts.map(post => 
                      <tr>
                          <td scope="row">{post.ID}</td>
                          <td>{post.NID}</td>
                          <td>{post.age}</td>
                          <td>{post.mobile}</td>
                          <td>{post.address}</td>
                      </tr>)}
              </tbody>
          </table>
  
          )
      }



}
  
  export default AxioGet_customer;
  
if (document.getElementById('axioget_customer')) {
  const Index = ReactDOM.createRoot(document.getElementById("axioget_customer"));

  Index.render(
      <React.StrictMode>
          <AxioGet_customer/>
      </React.StrictMode>
  )
}
