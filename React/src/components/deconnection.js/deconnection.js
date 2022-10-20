import React from 'react'
import axios from 'axios';
import { useState } from 'react';

const Deco = () => {

    var user = []

    localStorage.setItem('user', JSON.stringify(""))
        user = localStorage.getItem('user')
        // console.log(JSON.parse(user))
        user = JSON.parse(user)

    return (
        <h2>Vous vous etes bien deconnecté</h2>
    )
}

export default Deco

   