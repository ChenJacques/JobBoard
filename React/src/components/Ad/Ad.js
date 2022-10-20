import axios from 'axios'
import React, {useEffect} from 'react'
import { ServerStyleSheet } from 'styled-components'
import ListeAd from './listeAd'



const Ad = (props) => {
  // console.log(props)
  const [test, setTest] = React.useState("")
  var cequetuveux = 0;

  function Affichage(){
      var tamere =[]
      var stock =[]
      axios.get('http://localhost:8000/api/jobs?page=1')
      .then(res => {
        stock = res.data['hydra:member']
        // console.log(stock)
      
        stock.forEach(element => {
          if (element.id == props.id){

            
            // console.log(cequetuveux)
            console.log(res.data['hydra:member'][0])
            setTest(<ListeAd jobNom={res.data['hydra:member'][cequetuveux].jobNom} jobDescription={res.data['hydra:member'][cequetuveux].jobDescription} jobEntreprise={res.data['hydra:member'][cequetuveux].jobEntreprise} jobLieu={res.data['hydra:member'][cequetuveux].jobLieu} jobShort={res.data['hydra:member'][cequetuveux].jobShort} id={res.data['hydra:member'][cequetuveux].id}/>)
          }
        cequetuveux = cequetuveux +1})
      }).catch(err=>{
        console.log(err)
      })
      
  }


  return (
    <div class="ad">
    <div class="ad1">
        <h2>{props.jobNom}</h2>
        <h3>{props.jobEntreprise}</h3>
        <h3>{props.jobLieu}</h3>
        <p class="overflow">{props.jobShort}</p>
        {test != "" ? test : null }
        <button onClick={Affichage}>Learn more</button>
    </div>
    </div>
  )
}

export default Ad
