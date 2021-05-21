    <template>

        <div class="container ">

            <div class="row">
    <!-- DISPLAYING PAST CUSTOMERS INFORMATION -->
            <div class="customers-component">
            <div class="customers-data">
                <div class="results" v-for="(info,index) in customerdata" :key="(index)">
                    <div v-if="(info.length > 0)">
                    <div v-for="(item, i) in info" :key="(i)">

                                <table class="table table-sm">
                                        <thead>
                                            <tr>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row"></th>
                                           <i class="image" style="width:80px"><img :src="`../../images/profilo.png`" alt=""></i>
                                            <td><h2>{{item.name}}</h2></td>
                                            <td><h2>{{item.surname}}</h2></td>
                                            <td></td>
                                            </tr>

                                        </tbody>
                                        </table>
                    </div>

                    </div>

                </div>
            </div>
            </div>

            </div>
            <!-- row -->
        </div>
        <!-- container -->




    </template>

    <script>

        export default {

            data: function () {

                return {

                customerdata:[],
                }
            },

            mounted() {

                const self = this;

                // Chiamata Axios all'API customers
                axios.get('http://127.0.0.1:8000/api/customers', {
                })
                .then((resp) => {

                    self.customerdata = resp.data;


                });
            },

            methods: {


            }
        }

    </script>

