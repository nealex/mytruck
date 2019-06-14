<template>

    <div class="mx-auto" style="width: 500px;">
        <h2 class="h2">View trucks list</h2>
        <ul class="list-group list-group-flush">
            <li v-for="truck, index in trucks" class="list-group-item">
                {{ truck.name }}
                <router-link :to="{name: 'TrucksShow', params: {id: truck.id}}" class="btn btn-link">
                    view
                </router-link>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                trucks: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/api/trucks')
                .then(function (resp) {
                    app.trucks = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load companies");
                });
        },
        methods: {

        }
    }
</script>

