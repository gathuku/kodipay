
import Dashboard from './components/Dashboard.vue';
import Payment from './components/Payment.vue';


export const routes=[
{path:'/dashboard', component:Dashboard},
{path:'/payment',component:Payment},
{path:'*', component:Dashboard}
];
