import React , {useState} from 'react';
import {Link} from 'react-router-dom';

const ListeAd = () => {
        
    const [nomAd, setnomAd] = useState();
    const [nomEntreprise, setnomEntreprise] = useState();
    const [lieu, setlieu] = useState();
    const [description, setdescription] = useState();
    const [dateAnnonce, setdateAnnonce] = useState();


    function learn(){
        setnomAd("Alternance data");
        setnomEntreprise("Safran");
        setlieu("Paris");
        setdescription("Nulla do eu magna consequat occaecat elit cupidatat in dolor. Amet reprehenderit culpa ex amet eu ea nulla non sit labore pariatur mollit laboris labore. Ea occaecat magna irure dolor Lorem. Aliquip est laboris dolor aliqua et. Fugiat do in enim culpa nisi incididunt laborum velit minim eu. Nulla do eu magna consequat occaecat elit cupidatat in dolor. Amet reprehenderit culpa ex amet eu ea nulla non sit labore pariatur mollit laboris labore. Ea occaecat magna irure dolor Lorem. Aliquip est laboris dolor aliqua et. Fugiat do in enim culpa nisi incididunt laborum velit minim eu. Nulla do eu magna consequat occaecat elit cupidatat in dolor. Amet reprehenderit culpa ex amet eu ea nulla non sit labore pariatur mollit laboris labore. Ea occaecat magna irure dolor Lorem. Aliquip est laboris dolor aliqua et. Fugiat do in enim culpa nisi incididunt laborum velit minim eu. Nulla do eu magna consequat occaecat elit cupidatat in dolor. Amet reprehenderit culpa ex amet eu ea nulla non sit labore pariatur mollit laboris labore. Ea occaecat magna irure dolor Lorem. Aliquip est laboris dolor aliqua et. Fugiat do in enim culpa nisi incididunt laborum velit minim eu.");
        setdateAnnonce("Posté le 03/10/2022");
        
    }
    

    
    return (
        <>
    <div class="ad">
    <div class="ad1">
        <h2>Nom de l'ad</h2>
        <h3>nom de l'entreprise</h3>
        <h3>lieu</h3>
        <p class="overflow">dslsjer  e ieih ei jd vcd vh skdb ie vie cg kjzdd z i rjh sjhc he ch zcjb dejc kc ke fkh v ek edhk fhk vedhf d e rf llk khze ce cj sbjc djbf cjbscj sjbc dsb cjs dcjb dfjv fjd vjs dcjs c sjcs djc j j  </p>
        <button onClick={learn}>Learn more</button>
    </div>
    </div>

    <div class="absolute">
    <div class="affichagead">
      <h2>{nomAd}</h2>
      <h3>{nomEntreprise}</h3>
      <h3>{lieu}</h3>
      <div class="mybox">
      {description}
      <h4>{dateAnnonce}</h4>
      <button>Postuler</button>
      </div>
    </div>
    </div>
    </>
    
  )
}

export default ListeAd
