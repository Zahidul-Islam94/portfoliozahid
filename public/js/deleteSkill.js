function deleteSkill(id){
    data={
        id: id
    }
    axios.post('/delete-skill', data)
    .then(function (response) {
      console.log(response);
      alert('deleted')
    })
    .catch(function (error) {
      console.log(error);
    });
}