<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">{{ titulo }}</div>

          <div class="panel-body">{{ description }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return{
      titulo: 'Titulo de componente',
      description: 'Exemplo de componente!'
    }
  },
  /* created(){
    $this.$http.get('http://localhost/apiteste/public/api/products')
    .then(res => console.log(res)); 
    .then(description => this.description  = description, err => console.log(err));
  } */
};
</script>
