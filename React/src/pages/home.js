import React from 'react'
import Navbar from '../components/nav/Navbar'
import Hireme from '../components/background/Hireme'
import Repeat from '../components/Ad/Repeat'
import ListeAd from '../components/Ad/listeAd'



const Home = () => {
  let test = <Repeat/>
  return (
    <>
        <Navbar/>
        <Hireme/>
        <Repeat/>
    </>
  )
}

export default Home
