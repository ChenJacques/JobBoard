import React from 'react';
import {Link, useNavigate} from 'react-router-dom';

const ListeAd = (props) => {

  const navigate = useNavigate()

  function Postuler () {   
    navigate('/postuler')
  }


    
    return (
      <>
        <div class="absolute">
          <div class="affichagead">
            <h2>{props.jobNom}</h2>
            <h3>{props.jobEntreprise}</h3>
            <h3>{props.jobLieu}</h3>
            <div class="mybox">
              <p>{props.jobDescription}</p>
              <button onClick={Postuler}>Postuler</button>
            </div>
          </div>
        </div>
      </>
    
  )
}

export default ListeAd
