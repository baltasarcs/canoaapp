import AllVehicle from './components/AllVehicle.vue';
import CreateVehicle from './components/CreateVehicle.vue';
import EditVehicle from './components/EditVehicle.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllVehicle
    },
    {
        name: 'create',
        path: '/create',
        component: CreateVehicle
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditVehicle
    }
];
