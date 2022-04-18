import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import Login from './Components/Login';
import Loggin from './Components/Loggin';
import reportWebVitals from './reportWebVitals';
import App from './App';
import Home from './Components/Home';
import Download from './Components/Download';
import Registration from './Components/Registration';
import {BrowserRouter as Router,Route,Switch,Link} from 'react-router-dom';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    
     <Router>
          <Link to="/Home">Home</Link>

            <Link to="/Loggin"> Loggin</Link>
            <Link to="/Login"> Login</Link>
            <Link to="/Download"> Download</Link>
            <Link to="/Registration"> Registration</Link>

                <Switch>
                <Route exact path ="/Home"> <Home/> </Route> 

                    <Route exact path ="/Loggin"> <Loggin/> </Route>
                    <Route exact path ="/Login"> <Login/> </Route>
                    <Route exact path ="/Download"> <Download/> </Route>
                    <Route exact path="/Registration"> <Registration/></Route>
                </Switch>
           
    </Router>
 
    
    {/* <App/> */}
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
