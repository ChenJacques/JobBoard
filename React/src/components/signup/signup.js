import React from 'react'
import axios from 'axios';
import { useState } from 'react';

const Signup = () => {

    const [formValue, setformValue] = React.useState({
        pseudo : '',
        fullName : '',
        email: '',
        password: '',
        roles : []
      });
    
      const handleSubmit = async(e) => {
        e.preventDefault()
        const loginFormData = new FormData();
        loginFormData.append("pseudo", formValue.pseudo)
        loginFormData.append("name", formValue.fullName)
        loginFormData.append("username", formValue.email)
        loginFormData.append("password", formValue.password)
        loginFormData.append("roles", formValue.roles)
        console.log(formValue)

        axios.post('http://localhost:8000/api/utilisateurs', {
            email : formValue.email,
            password : formValue.password,
            fullName : formValue.fullName,
            pseudo : formValue.pseudo,
            roles :  ["ROLE_USER"],

        })
        .catch(err => {
            console.log(err)
        })

      
        // try {
            
        //   const response = await axios({
        //     method: "post",
        //     url: "http://localhost:8000/api/users",
        //     data: loginFormData,
        //     dataType : 'json',
        //     headers: { "Content-Type": "application/json" },
        //   });
        // } catch(error) {
        //   console.log(error)
        // }
      }
    
      const handleChange = (event) => {
        setformValue({
            
          ...formValue,
          [event.target.name]: event.target.value
        });
      }

      return (
        <form onClick={handleSubmit}>
          <p>Register Form</p>
          <input
            type="text"
            name="pseudo"
            placeholder="Enter Pseudo"
            value={formValue.pseudo}
            onChange={handleChange}
          />

            <input
            type="text"
            name="fullName"
            placeholder="Enter FullName"
            value={formValue.fullName}
            onChange={handleChange}
          />

          <input
            type="text"
            name="email"
            placeholder="Enter Email"
            value={formValue.email}
            onChange={handleChange}
          />
          <input
            type="password"
            name="password"
            placeholder="enter a password"
            value={formValue.password}
            onChange={handleChange}
          />
          <button
          >
            Register
          </button>
        </form>
      )
    };








//     return (
//         <div class="signup">
//             <form>
//                 <div class="container">
//                     <h2>Sign Up</h2>
//                     <p>Please fill in this form to create an account.</p>

//                     <label for="email">Pseudo</label>
//                     <input type="text" placeholder="Enter Pseudo" name="pseudo" required></input>

//                     <label for="email">Full Name</label>
//                     <input type="text" placeholder="Enter Full Name" name="fullname" required></input>

//                     <label for="email">Email</label>
//                     <input type="text" placeholder="Enter Email" name="email" required></input>

//                     <label for="email">Password</label>
//                     <input type="password" placeholder="Enter Password" name="psw" required></input>

//                     <div class="clearfix">
//                         <button type="button" class="cancelbtn">Cancel</button>
//                         <button type="submit" class="signupbtn">Sign Up</button>
//                     </div>
//                 </div>
//             </form>
//         </div>
//   )


export default Signup
