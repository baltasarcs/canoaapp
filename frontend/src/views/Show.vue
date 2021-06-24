<template>
  <div>
    <h1>Detalhes do Veículo</h1>

    <div class="ui labeled input fluid">
      <div class="ui label">
        <i class="info circle icon"></i>Veículo
      </div>
      <input type="text" readonly :value="veiculo.veiculo" />
    </div>

    <div class="ui labeled input fluid">
      <div class="ui label">
        <i class="info circle icon"></i> Marca
      </div>
      <input type="text" readonly :value="veiculo.marca" />
    </div>

    <div class="ui labeled input fluid">
      <div class="ui label">
        <i class="calendar plus icon"></i> Ano
      </div>
      <input type="text" readonly :value="veiculo.ano"/>
    </div>

    <div class="ui labeled input fluid">
      <div class="ui label">
        <i class=""></i> Vendido
      </div>
      <select readonly  :value="veiculo.vendido">
          <option value="0">Não</option>
          <option value="1">Sim</option>
      </select>
    </div>

    <div class="ui labeled input fluid">
      <div class="ui label">
        <i class=""></i> Descrição
      </div>
      <textarea placeholder="Informações gerais" cols="60" rows="5" readonly :value="veiculo.descricao"></textarea>
    </div>

    <div class="actions">
      <router-link :to="{ name: 'edit', params: { id: this.$route.params.id }}" class="positive ui button">Alterar</router-link>
    </div>
  </div>
</template>

<script>
import { api } from '../helpers/helpers';
export default {
  name: 'show',
  data() {
    return {
      veiculo: ''
    };
  },
  async mounted() {
    this.veiculo = await api.getvehicle(this.$route.params.id);
  }
};
</script>

<style scoped>
.actions a {
  display: block;
  text-decoration: underline;
  margin: 20px 10px;
}
</style>
