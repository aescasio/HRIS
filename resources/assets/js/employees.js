/**
 * Created by avescasio on 9/11/2017.
 */

require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#add-new-element',
    data: {
        elements: [{
            emp_name: '',
            emp_start_date: '',
            emp_end_date: '',
            emp_job_title: '',
            emp_starting_salary: '',
            emp_final_salary: '',
            emp_reason: '',
            emp_industry_type: '',
            emp_status: ''
        }]
    },
    methods:
    {
        addNewElement(){
            this.elements.push({
                emp_name: '',
                emp_start_date: '',
                emp_end_date: '',
                emp_job_title: '',
                emp_starting_salary: '',
                emp_final_salary: '',
                emp_reason: '',
                emp_industry_type: '',
                emp_status: ''
            });
        },
        deleteElement(index){
            this.elements.splice(index, 1);
        }
    }
    // components: {
    //     'child' : {
    //         template: `#child`,
    //         props: ['text', 'i'],
    //         methods: {
    //             removeMe(i) {
    //                 this.$emit('remove', i);
    //             }
    //         }
    //     }
    // }
});

