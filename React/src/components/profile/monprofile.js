import React from 'react'
import axios from 'axios';


const Monprofile = () => {

    let user = localStorage.getItem('user')
    user = JSON.parse(user)
    console.log(user.fullName)
    return(
        <div>
            <div class="divprof1">
                <h2>Bonjour {user.fullName}</h2>
            </div>
            <div class="divprof1">
                <h2>Vos Candidatures</h2>
            </div>
            <div class="divprof1">
            </div>
        </div>
        
    )
}


export default Monprofile
