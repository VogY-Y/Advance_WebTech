import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';

class AxioGet_student extends Component {
  state = {
        posts: []
      }
    
      componentDidMount() {
        axios.get('http://pankaj.project/api/student/list')
        
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
                      <th scope="col">id</th>
                      <th scope="col">name</th>
                      <th scope="col">address</th>
                  </tr>
              </thead>
              <tbody>
                  {this.state.posts && this.state.posts.map(post => 
                      <tr>
                          <td scope="row">{post.student_id}</td>
                          <td>{post.name}</td>
                          <td>{post.address}</td>
                      </tr>)}
              </tbody>
          </table>
  
          )
      }



}
  
  export default AxioGet_student;
  
if (document.getElementById('axioget_student')) {
  const Index = ReactDOM.createRoot(document.getElementById("axioget_student"));

  Index.render(
      <React.StrictMode>
          <AxioGet_student/>
      </React.StrictMode>
  )
}
