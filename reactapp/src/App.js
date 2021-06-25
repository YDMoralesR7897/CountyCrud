import React,{useEffect, useState } from 'react';
/*import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link
} from "react-router-dom";*/

const optionFetch = {
  method:'GET',
  headers:{
    'Content-Type':'aplication/json',
    'X-Requested-With':'XMLHttpRequest'
  }
};

function App() {
  const [data, setData] = useState([])
  useEffect(() => {
    const init = () => {
      fetch('http://127.0.0.1:8000/api/crud',optionFetch)
      .then(Response => Response.json())
      .then(data => setData(data.users),)

    }
    init()
  },[] )
  
  return (
    
    <div>
      <ol>
        {data.map((item)=>(<li key = {item.id}>{item.name }   --   {item.email}</li>))}
      </ol>
    </div>
   
   
    
  );
}

export default App;
