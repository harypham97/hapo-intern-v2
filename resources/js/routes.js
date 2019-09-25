import staffIndex from './components/staffs/staff-index';
import staffCreate from './components/staffs/staff-create';

export default [

        {
            path: '/staff',
            name: 'staff-index',
            component: staffIndex
        },
    {
        path:'/staff/create',
        name: 'staff-create',
        component: staffCreate
    },
        {
            path: '/',
            name:'admin',
            // component: defaultLayout
        },
    ]
