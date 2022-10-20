import React from 'react'
import axios from 'axios';
import { useState } from 'react';

const Annonce = () => {

    const [formValue, setformValue] = React.useState({
        jobDescription : '',
        jobNom : '',
        jobEntreprise : '',
        jobLieu : '',
        jobShort : ''

      });
    
      const handleSubmit = async(e) => {
        e.preventDefault()
        const loginFormData = new FormData();
        loginFormData.append("jobDescription", formValue.jobDescription)
        loginFormData.append("jobNom", formValue.jobNom)
        loginFormData.append("jobEntreprise", formValue.jobEntreprise)
        loginFormData.append("jobLieu", formValue.jobLieu)
        loginFormData.append("jobShort", formValue.jobShort)
        console.log(formValue)

        axios.post('http://localhost:8000/api/jobs', {
            jobDescription : formValue.jobDescription,
            jobNom : formValue.jobNom,
            jobEntreprise : formValue.jobEntreprise,
            jobLieu : formValue.jobLieu,
            jobShort : formValue.jobShort,

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
          <p>Saisissez votre annonce</p>
          <input
            type="text"
            name="jobNom"
            placeholder="Entrez l'intitulé du poste"
            value={formValue.jobNom}
            onChange={handleChange}
          />

            <input
            type="text"
            name="jobDescription"
            placeholder="Entrez la description du poste"
            value={formValue.jobDescription}
            onChange={handleChange}
          />
          
          <input
            type="text"
            name="jobShort"
            placeholder="Entrez la courte description du poste"
            value={formValue.jobShort}
            onChange={handleChange}
          />

          <input
            type="text"
            name="jobEntreprise"
            placeholder="Entrez le nom de votre entreprise"
            value={formValue.jobEntreprise}
            onChange={handleChange}
          />
          <input
            type="text"
            name="jobLieu"
            placeholder="Entrez le lieu d'exercice"
            value={formValue.jobLieu}
            onChange={handleChange}
          />
          <button
          >
            Poster l'annonce
          </button>
        </form>
      )
    };

export default Annonce