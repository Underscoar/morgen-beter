const { createApp, ref } = Vue

createApp({
  setup() {
    const gender = ref()
    const loading = ref(false)

    function submitForm() {
      loading.value = true

      let form = document.createElement("form");
      form.className = 'hidden-form'
      
      form.method = "GET";
      form.action = "morgen-beter.php";
      
      let genderVal = document.createElement("input"); 
      genderVal.value=gender.value;
      genderVal.name="gender";
      form.appendChild(genderVal);

      document.body.appendChild(form);

      form.submit();
    } 

    return {
      gender,
      loading,
      submitForm,
    }
  }
}).mount('#app')