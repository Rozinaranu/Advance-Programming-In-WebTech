import React from 'react';
import abcd from './abcd.png';
const Download = () =>{
    return(
        <div> 
            <center> 
                <h6> Certificate </h6>
                <img src={abcd} alt="abcd" height="250" width="450"/>  <br/>
                <a href={abcd} className="btn-btn-primary" download="abcd">Click here to download </a>

            </center>
        </div>
    )
}
export default Download;