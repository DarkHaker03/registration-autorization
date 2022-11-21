import { useState } from "react";

function App() {
  const [login,setLogin]= useState('');
  const [password,setPassword]= useState('');

  function request() {
    if(login && password){
      fetch('http://localhost:4000/user',{
        method:'POST',
        body: JSON.stringify({login, password}),
      });
    }else{
      alert('Заполните все поля !');
    } 
  }

  return (
    <div className="App">
      <input type="text"placeholder="login" value={login} onChange={(e)=> setLogin(e.target.value)}/>
      <br/>
      <input type="text"placeholder="password" value={password} onChange={(e)=> setPassword(e.target.value)}/>
      <br/>
      <button onClick={request}>Submit</button>
    </div>
  );
}

export default App;
