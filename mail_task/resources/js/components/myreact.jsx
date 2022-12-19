import React from 'react';
import ReactDOM from 'react-dom/client';

function Myreact() {
    return (
        <table >
        <tr>
          <th>Name</th>
          <th>Age</th>
        </tr>
        <tr>
          <td>John</td>
          <td>26</td>
        </tr>
        <tr>
          <td>Elsa</td>
          <td>20</td>
        </tr>
        <tr>
          <td>pankaj</td>
          <td>20</td>
        </tr>
      </table>
    );
  
}
export default Myreact;

if (document.getElementById('root')) {
    const Index = ReactDOM.createRoot(document.getElementById("root"));

    Index.render(
        <React.StrictMode>
            <Myreact/>
        </React.StrictMode>
    )
}
