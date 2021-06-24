<template>
 <form action="#" @submit.prevent="onSubmit">
    <p v-if="errorsPresent" class="error">Favor efetuar o preenchimento de todos os campos</p>

    <div class="ui labeled input fluid">
      <div class="ui label">
        <i class="info circle icon"></i>Veículo
      </div>
      <input type="text" placeholder="" v-model="veiculo.veiculo" />
    </div>

    <div class="ui labeled input fluid">
      <div class="ui label">
        <i class="info circle icon"></i> Marca
      </div>
      <input type="text" placeholder="Informe a marca" v-model="veiculo.marca" />
    </div>

    <div class="ui labeled input fluid">
      <div class="ui label">
        <i class="calendar plus icon"></i> Ano
      </div>
      <input type="number" placeholder="Informe o Ano" v-model="veiculo.ano"/>
    </div>

    <div class="ui labeled input fluid">
      <div class="ui label">
        <i class=""></i> Vendido
      </div>
      <select v-model="veiculo.vendido">
          <option value="0">Não</option>
          <option value="1">Sim</option>
      </select>
    </div>

    <div class="ui labeled input fluid">
      <div class="ui label">
        <i class=""></i> Descrição
      </div>
      <textarea placeholder="Informações gerais" cols="60" rows="5" v-model="veiculo.descricao"></textarea>
    </div>

    <button class="positive ui button">Gravar</button>
  </form>
</template>

<script>
export default {
  name: 'veiculo-form',
  props: {
    veiculo: {
      type: Object,
      required: false,
      default: () => {
        return {
          veiculo: '',
          marca: '',
          ano: '',
          vendido: '0',
          descricao: ''
        };
      }
    }
  },
  data() {
    return {
      errorsPresent: false
    };
  },
  methods: {
    onSubmit: function() {
      if (  this.veiculo.veiculo === '' ||
            this.veiculo.marca === '' ||
            this.veiculo.ano === '' ||
            this.veiculo.descricao === '') {
        this.errorsPresent = true;
      } else {
        this.$emit('createOrUpdate', this.veiculo);
      }
    }
  }
};
</script>

<style scoped>
.error {
  color: red;
}
</style>
