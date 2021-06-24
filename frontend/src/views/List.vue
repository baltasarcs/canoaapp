<template>
  <div>
    <h1>Veículos</h1>
    <table id="tasks" class="ui celled compact table">
      <thead>
        <tr>
         <th>  <i class="info circle icon"></i>Veículo</th>
          <th> <i class="info circle icon"></i>Marca</th>
          <th>  <i class="calendar plus icon"></i>Ano</th>
            <th> <i class="eye icon"></i></th>
            <th> <i class="edit icon"></i></th>
            <th> <i class="trash icon"></i></th>
        </tr>
      </thead>
      <tr v-for="(veiculo, i) in veiculos" :key="i">
        <td>{{ veiculo.veiculo }}</td>
        <td>{{ veiculo.marca }}</td>
        <td>{{ veiculo.ano }}</td>
        <td width="75" class="center aligned">
          <router-link :to="{ name: 'show', params: { id: veiculo.id }}" class="positive ui button">Visualizar</router-link>
        </td>
        <td width="75" class="center aligned">
          <router-link :to="{ name: 'edit', params: { id: veiculo.id }}" class="default ui button">Alterar</router-link>
        </td>
        <td width="75" class="center aligned" @click.prevent="onDestroy(veiculo.id)" >
          <a :href="`/veiculo/${veiculo.id}`" class="negative ui button">Remover</a>
        </td>
      </tr>
    </table>
  </div>
</template>

<script>
import { api } from '../helpers/helpers';
export default {
  name: 'veiculos',
  data() {
    return {
      veiculos: []
    };
  },
  methods: {
    async onDestroy(id) {
      const sure = window.confirm('Tem Certeza?');
      if (!sure) return;
      await api.deletevehicle(id);
      this.flash('Veículo removido!', 'success');
      const newvhe = this.veiculos.filter(veiculo => veiculo.id !== id);
      this.veiculos = newvhe;
    }
  },
  async mounted() {
    this.veiculos = await api.getvehicles();
  }
};
</script>
