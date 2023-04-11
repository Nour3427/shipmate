const url = 'https://geo.api.gouv.fr/communes';
fetch(url)
  .then(response => response.json())
  .then(data => {
    let tab = new Array();
    for (let i = 0; i < data.length; i++) {
      let name = data[i].nom;
      tab[i] = name;
    }
    fetch('city.php?data=' + JSON.stringify(tab), {
      method: 'GET'
    })
    .then(response => response.text())
    .then(data => {
      console.log(data);
    });
  });
// const country='france';

// const url = 'https://geo.api.gouv.fr/communes';
// fetch(url)
//   .then(response => response.json())
//   .then(data => {
//     // console.log(data);
//     let tab = new Array();
//     for (let i = 0; i < data.length; i++) {
//       let name = data[i].nom;
//       tab[i] = name;
//     }
//     console.log(tab);
//     fetch('city.php', {
//       method: 'POST',
//       headers: {
//         'Content-Type': 'application/json'
//       },
//       body: JSON.stringify(tab)
//     })
//   });
/* 

// Envoyer une requête HTTP en utilisant fetch
fetch('city.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify(tab)
})
  .then(response => response.text())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error(error);
  }); */