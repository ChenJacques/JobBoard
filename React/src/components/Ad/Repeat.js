import React, {useState, useEffect} from 'react'
import Ad from './Ad'
import axios from 'axios'




function Repeat() {
    var tableau = []
    const [ad, setAd] = useState([])

      useEffect(() => {
        axios.get('http://localhost:8000/api/jobs?page=1')
          .then(res => {
            // console.log(res.data['hydra:member'])
            for (let i = 0; i < 10; i++) {
              tableau[i]= <Ad jobNom={res.data['hydra:member'][i].jobNom} jobEntreprise={res.data['hydra:member'][i].jobEntreprise} jobLieu={res.data['hydra:member'][i].jobLieu} jobShort={res.data['hydra:member'][i].jobShort} id={res.data['hydra:member'][i].id}/>
            }
            setAd(tableau)
          }).catch(err => {
            console.log(err)
          })
      }, [])
      return ad
}

export default Repeat
