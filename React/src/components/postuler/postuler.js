import React from 'react';
import axios from 'axios';

const Postule = () => {

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
      }
    
      const handleChange = (event) => {
        setformValue({
            
          ...formValue,
          [event.target.name]: event.target.value
        });
      }

      return (
        <form onClick={handleSubmit}>
          <p>Envoyer votre Candidature</p>
          <input
            type="text"
            name="nom"
            placeholder="Votre Nom"
            value={formValue.pseudo}
            onChange={handleChange}
          />

          <input
            type="text"
            name="email"
            placeholder="Entrer votre Email"
            value={formValue.email}
            onChange={handleChange}
          />

        <input
            type="text"
            name="email"
            placeholder="Entrer votre Message"
            value={formValue.email}
            onChange={handleChange}
          />

          
          <button>Envoyer</button>
        </form>
      )
}
export default Postule
