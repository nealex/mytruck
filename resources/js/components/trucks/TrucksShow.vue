<template>
    <div>
        <h3>View current truck:</h3>
        <div class="tab-pane">
            <table class="table">
                <thead>
                <th>Name</th>
                <th>Rider</th>
                <th>Type</th>
                <th>State</th>
                </thead>
                <tbody>
                <tr>
                    <td>{{ truck.name }}</td>
                    <td>{{ truck.rider }}</td>
                    <td>{{ truck.type }}</td>
                    <td>{{ truck.state }}</td>
                </tr>
                </tbody>
            </table>

            <!--<input type="text" v-model="truck.name" class="form-control">-->
            <!--<br>-->
            <!--<-->
            <!--<input type="text" v-model="company.address" class="form-control">-->
            <!--<br>-->
            <!--&lt;!&ndash;<label>State</label>&nbsp;<span v-model="truck.state"></span>&ndash;&gt;-->
            <!---->
            <!--<br>-->
            <!--&lt;!&ndash;&ndash;&gt;-->
            <!--<input type="text" v-model="company.address" class="form-control">-->
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.truckId = id;
            axios.get('/api/trucks/' + id)
                .then(function (resp) {
                  app.truck = resp.data;

                  //  app.truck.name = 'test';
                })
                .catch(function () {
                    alert("Could not load your company")
                });
        },
        data: function () {
            return {
                truckId: null,
                truck: {
                    name: '',
                    rider: '',
                    state: '',
                    type: '',
                }
            }
        },
    }
</script>
