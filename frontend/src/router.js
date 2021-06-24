import Vue from 'vue';
import Router from 'vue-router';
import List from './views/List.vue';
import New from './views/New.vue';
import Show from './views/Show.vue';
import Edit from './views/Edit.vue';

Vue.use(Router);

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  linkActiveClass: 'active',
  routes: [
    {
      path: '/',
      redirect: '/veiculo'
    },
    {
      path: '/veiculo',
      name: 'vehicle',
      component: List
    },
    {
      path: '/veiculo/new',
      name: 'new-vehicle',
      component: New
    },
    {
      path: '/veiculo/:id',
      name: 'show',
      component: Show
    },
    {
      path: '/veiculo/:id/edit',
      name: 'edit',
      component: Edit
    }

  ]
});
