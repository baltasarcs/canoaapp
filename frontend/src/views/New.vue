<template>
  <div>
    <h1>Cadastro de Veículo</h1>
    <veiculo-form @createOrUpdate="createOrUpdate"></veiculo-form>
  </div>
</template>

<script>
import vehicleForm from '../components/VehicleForm.vue';
import { api } from '../helpers/helpers';
export default {
  name: 'new-vehicle',
  components: {
    'veiculo-form': vehicleForm
  },
  methods: {
    createOrUpdate: async function(veiculo) {
      const res = await api.createvehicle(veiculo);
      this.flash('Veículo Adicionado!', 'success');
      this.$router.push(`/veiculo/${res.id}`);
    }
  }
};
</script>
