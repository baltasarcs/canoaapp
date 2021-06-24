import axios from 'axios';
import Vue from 'vue';
import VueFlashMessage from 'vue-flash-message';
import 'vue-flash-message/dist/vue-flash-message.min.css';

Vue.use(VueFlashMessage, {
  messageOptions: {
    timeout: 3000,
    pauseOnInteract: true
  }
});

const vm = new Vue();
const baseURL = 'http://localhost/api/veiculos/';

const handleError = fn => (...params) =>
  fn(...params).catch(error => {
    vm.flash(`${error.response.status}: ${error.response.statusText}`, 'error');
  });

export const api = {
  getvehicle: handleError(async id => {
    const res = await axios.get(baseURL + id);
    return res.data;
  }),
  getvehicles: handleError(async () => {
    const res = await axios.get(baseURL);
    return res.data;
  }),
  deletevehicle: handleError(async id => {
    const res = await axios.delete(baseURL + id);
    return res.data;
  }),
  createvehicle: handleError(async payload => {
    const res = await axios.post(baseURL, payload);
    return res.data;
  }),
  updatevehicle: handleError(async payload => {
    const res = await axios.put(baseURL + payload.id, payload);
    return res.data;
  })
};
