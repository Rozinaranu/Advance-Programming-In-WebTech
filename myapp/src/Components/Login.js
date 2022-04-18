import { useState } from 'react';
//import axios from 'axios';

const Login = () => {

    const [email, setEmail] = useState("");
    const [emailError, setemailError] = useState("");
    const [password, setPassword] = useState("");
    const [passwordError, setpasswordError] = useState("");
    const [msg, setMsg] = useState("");

    const handleEmailChange = (e) => {
        setMsg('');
        setemailError('');


        setEmail(e.target.value);
    }

    const handlePasswordChange = (e) => {
        setMsg('');
        setpasswordError('');


        setPassword(e.target.value);
    }

    const handleForm = (e) => {
        e.preventDefault();
        if (email !== '') {
            const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (emailRegex.test(email)) {
                setemailError = '';
                if (email === 'rozinaranu1239@gmail.com') {
                    setemailError('');
                    if (password === 'demo') {
                        setMsg('SUCCESFULLY LOGGED IN');
                    }
                }
            }
        }
        else {
            setemailError('*Email Required');

        }

        if (password !== '') {

        }
        else {
            setpasswordError('*password Required');

        }

       


    }


    return (
        <div>
            <h3><center>Student Login</center> </h3>
            <hr/>
            {msg && <div> {msg}</div>}
            <form onSubmit={handleForm}>
                <label> Email : </label>
                <input type="text" placeholder='Enter Email ' 
                    onChange={handleEmailChange} value={email} /> 
                {emailError && <div className='error-msg'>{emailError}</div>}
                <label> Password: </label>
                <input type="Password " placeholder='Enter password '
                    onChange={handlePasswordChange} value={password} />
                {passwordError && <div className='error-msg'>{passwordError}</div>}
                <br/> 

                <input type="submit" value="LogIn" />
            </form>
        </div>

    )


}
export default Login;
