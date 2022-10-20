// import React from 'react'

// function affichage(){
//     const [ad, setAd] = useState([])

//       useEffect(() => {
//         axios.get('http://localhost:8000/api/jobs?page=1')
//           .then(res => {
//             console.log(res.data['hydra:member'])
//               <listeAd jobNom={res.data['hydra:member'][i].jobNom} jobEntreprise={res.data['hydra:member'][i].jobEntreprise} jobLieu={res.data['hydra:member'][i].jobLieu} jobShort={res.data['hydra:member'][i].jobShort}/>
//             setAd(tableau)
//           }).catch(err => {
//             console.log(err)
//           })
//       }, [])
//       return ad

// }

// export default affichage