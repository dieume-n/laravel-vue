<template>
    <div class="col-md-8 mt-4">
        <div class="card card-default">
            <div class="card-header">Add Task</div>
            <div class="card-body">
                <form action="./api/task" method="POST" @submit.prevent="addTask()">
                    <div class="form-group">
                        <input type="text" name="title" placeholder="Task title" class="form-control" v-model="title">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Add Task" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                title: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            addTask(){
                axios.post('./api/task', { title: this.title })
                .then( function(){
                    Event.$emit( 'taskCreated', { title: this.title } );
                    this.title = '';
                }).catch( function(){

                });
               
            }
        }
    }
</script>
