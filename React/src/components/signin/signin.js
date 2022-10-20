import React from 'react'
import axios from 'axios';
import { useState } from 'react';
import Home from '../../pages/home' ;

const Signin = () => {

    var stock = []
    var user = []


    const [formValue, setformValue] = React.useState({
        email: '',
        password: '',

      });
    
      const handleSubmit = async(e) => {
        e.preventDefault()
        const loginFormData = new FormData();
        loginFormData.append("username", formValue.email)
        loginFormData.append("password", formValue.password)

        axios.get('http://localhost:8000/api/utilisateurs')
        .then(res => {
            stock = res.data['hydra:member']
            stock.forEach(element => {
                if (formValue.email == element.email && formValue.password == element.password) {
                    console.log('Ca marche')
                    localStorage.setItem('user', JSON.stringify(element))
                    user = localStorage.getItem('user')
                    // console.log(JSON.parse(user))
                    user = JSON.parse(user)
                    console.log(user.email)

                    return <Home/>
                    
                } else {
                    console.log('Raté')
                }
                
            });

        })
        .catch(err => {
            console.log(err)
        })

      }
    
      const handleChange = (event) => {
        setformValue({
            
          ...formValue,
          [event.target.name]: event.target.value
        });
      }

      return (
        <form onClick={handleSubmit}>
          <p>Login Form</p>
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
            Login
          </button>
        </form>
      )
    };


export default Signin
