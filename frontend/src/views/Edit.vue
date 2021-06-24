<template>
  <div>
    <h1>Alterar Veículo</h1>
    <veiculo-form @createOrUpdate="createOrUpdate" :veiculo=this.veiculo></veiculo-form>
  </div>
</template>

<script>
import vehicleForm from '../components/VehicleForm.vue';
import { api } from '../helpers/helpers';

export default {
  name: 'edit',
  components: {
    'veiculo-form': vehicleForm
  },
  data: function() {
    return {
      veiculo: {}
    };
  },
  methods: {
    createOrUpdate: async function(veiculo) {
      await api.updatevehicle(veiculo);
      this.flash('Veículo Atualizado!', 'success');
      this.$router.push(`/veiculo/${veiculo.id}`);
    }
  },
  async mounted() {
    this.veiculo = await api.getvehicle(this.$route.params.id);
  }
};
</script>
