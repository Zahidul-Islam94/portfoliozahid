function create(){
    var language = document.getElementById('name').value;
    var percentage =  document.getElementById('age').value;
    data = {
        language    : language,
        percentage  : percentage
    }
    axios.post('/create-skill', data)
      .then(function (response) {
        console.log(response);
        alert('success')
      })
      .catch(function (error) {
        console.log(error);
      });
}