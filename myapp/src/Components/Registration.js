import {useState} from 'react';
import axios from 'axios';

const Registration=()=>{
    //const [name,setName] = useState("");
    //const [id,setId] = useState("");
    //const [email,setEmail] = useState("");
   // const [dob,setDob] = useState("");

    const [username, setUsername] = useState("")
    const [password, setPassword] = useState("")
    const [role, setRole] = useState("Student")

    const handleForm=async (e)=>{
        e.preventDefault();
        var obj = {
            username,password,role
        };
        const {data:response} = await axios.post("http://127.0.0.1:8000/api/signup/post",obj)
        alert(response)
    }
    return(
        <form onSubmit={handleForm}>
            <input type="text" value={username} onChange={(e)=>{setUsername(e.target.value)}} placeholder='Username'/> <br/>
            <input type="password" value={password} onChange={(e)=>{setPassword(e.target.value)}} placeholder='Password'/><br/>
            <select value={role} onChange={(e)=>setRole(e.target.value)}>
                <option value={`student`}>Student</option>
                <option value={`instructor`}>Instructor</option>
            </select>
            <input type="submit" value="Register"/>
        </form>
    )

}
export default Registration;