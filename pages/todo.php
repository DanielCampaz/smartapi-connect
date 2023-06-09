<?php
require_once dirname(__FILE__, 2) . '\const\const.php';

$postElements = ["comment_status", "post_author", "post_name", "post_title", "post_content", "post_status", "post_type", "post_category", "featured_image", "next"];



enum Suit
{
}

if ($_POST && array_key_exists("form_todo", $_POST)) {
    if ($_POST["form_todo"] === "image-save") {
    } else if ($_POST["form_todo"] === "json") {
    }
    print_r($_POST);
}



$endpointS = "[
    { 
        endpoint: 'action',
         queries: [
            { 
                id: 654654,
                query: 'aca',
                value: 'kcbakj',
                type: 'query',
                routeResponse: 'cansc:acs:ca',
                typeResponse: 'object',
                action : {
                    type: 'saveImage',
                    actions: [
                        {
                            route: 'cascsa:asca:cas',
                            save: true,
                            type: 'string'
                        },
                        {
                            route: 'eree:rerasca:ceas',
                            save: true,
                            type: 'string'
                        },
                        {
                            route: 'hru:sc:d?asa',
                            save: false,
                            type: 'arrayString'
                        }
                    ]
                }
            },
            { 
                id: 'csdc54352',
                query: 'vvdv',
                value: 'kcbsdvfakj',
                type: 'body',
                routeResponse: 'cansc:acs:ca',
                typeResponse: 'array',
                action : {
                    type: 'jsonPC',
                    actions: {
                        comment_status: true,
                        featured_image: 'asa:dvd:img',
                        next: {
                            exist: true,
                            route: 'acas:asca:cs'
                        },
                        post_author: [
                            {
                                type: 'string',
                                value: 'casc:scs:s'
                            },
                            {
                                type: 'string',
                                value: 'casc:scs:s'
                            }
                        ],
                        post_category: [
                            {
                                type: 'arrayString',
                                value: 'cascacc:caca?cas:ca'
                            }
                        ],
                        post_content : [
                            {
                                type: 'string',
                                value: 'aada:sa:aca'
                            }
                        ],
                        post_name: [
                            {
                                type: 'string',
                                value: 'aada:sa:name'
                            }
                        ],
                        post_status: {
                            dynamic: true,
                            type: 'string',
                            value: 'acsa:cas:status'
                        },
                        post_title: [
                            {
                                type: 'string',
                                value: 'acsa:cas:title'
                            },
                            {
                                type: 'string',
                                value: 'acsa:cas:subTtitle'
                            }
                        ],
                        post_type: {
                            type: 'string',
                            value: 'casac:post:type'
                        }
                    }
                }
            },
            { 
                id: 'scsscd75',
                query: 'acaca',
                value: 'bgbfg',
                type: 'query',
                routeResponse: 'cansc:acs:ca',
                typeResponse: 'object',
                action : {
                    type: 'none',
                }
            }
        ]
    }
]"

?>

<div>
    <div class="connection_api titles">
        <h1 class="connection_api todo title"><?php echo $NAME_APPLICATION_TODO ?></h1>
        <p class="connection_api todo guide"><?php echo $GUIDE_TODO ?></p>
    </div>
    <div class="connection_api others_apis">
        <h1>APIS:</h1>
        <div class="cards">
            <?php
            $urlBase = "https://localhost/proyectos";
            for ($i = 0; $i < 10; $i++) {
            ?>
                <div class="connection_api card">
                    <div class="header" style="margin: 10px">
                        <h1>Name Api</h1>
                    </div>
                    <div class="body" style="margin: 10px">
                        <h4>Session?: True</h4>
                        <h4>Refresh Token: 10 HRS</h4>
                        <h4>Api Key?: True</h4>
                        <h4>Api Key Value: EacnE3fo35vm1313#cvlk</h4>
                    </div>
                    <div class="footer" style="margin: 10px">
                        <a href="https://localhost/proyectos/estudio/wp-admin" target="_blank">https://localhost/proyectos/estudio/wp-admin</a>
                        <br />
                        <button onclick="settingsEndpoints(<?php echo $i ?>, 'Name Api','<?php echo $urlBase ?>', <?php echo $endpointS ?>)">Edit Queries</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <br>
    <div class="endpoints" id="initd" style="display: none; margin: 15px;">
        <h3>Endpoints:</h3>
        <div></div>
    </div>
    <div class="endpoints" id="querysd" style="display: none; margin: 15px;">
        <h3>Query's:</h3>
        <div></div>
    </div>
    <div class="connection_api configurationToDoEndpoints container" style="display: none;">
        <div class="query">
            <h3>{url}/{endpoint}?{query}</h3>
        </div>
        <div class="action">
            <select name="actionTodoEndpoint" class='selectCSS' id="actionTodoEndpoint" title="Select To Action">
                <option value="endp">Select Action For Endpoint</option>
                <option value="post-type">Post Type</option>
                <option value="save-image">Save Images</option>
            </select>
        </div>
        <div class="posttype json" style="display: none;">
            <form action="" method="post">
                <input type="hidden" name="form_todo" value="json">
                <input type="hidden" name="id_api" id="id_api">
                <input type="hidden" name="endpoint_api" id="endpoint_api">
                <input type="hidden" name="id_query" id="id_query">
                <?php

                foreach ($postElements as $apE) {
                    if ($apE === "comment_status") {
                ?>
                        <div class="postype config <?php echo $apE ?>">
                            <h2><?php echo $apE ?></h2>
                            <h3>What key of the json of the response will be in the <?php echo $apE ?></h3>
                            <label class="content-input" for="comment_on" style="margin: 10px">
                                <input type="checkbox" name="comment_on" id="comment_on">Comments On for all post <?php echo $apE ?>
                                <i></i>
                            </label>
                        </div>

                    <?php
                    } else if ($apE === "next") {
                    ?>
                        <div class="postype config dynamic <?php echo $apE ?>">
                            <i title="Arrow for <?php echo $apE ?>" class="material-icons arrowX despla <?php echo $apE ?>">keyboard_arrow_right</i>
                            <h4><?php echo $apE ?>?</h4>
                            <div class="content postype config arrow_<?php echo $apE ?>" style="display: none">
                                <h2><?php echo $apE ?>?</h2>
                                <h3>When creating the post should we call a next page?</h3>
                                <label>
                                    Where we find the next in the json?
                                </label>
                                <label class="content-input" for="is_next" style="margin: 10px" title="If the response has a following, you must specify the path from the start of the response partner:child:childtwo">
                                    <input type="checkbox" name="is_next" id="is_next">
                                    <i></i>
                                </label>

                                <div style="display: none;" id="next_property_yes">
                                    <div class="multiples_json_properties_configurations_<?php echo $apE ?>" style="margin:5px;">
                                        <label title="Only properties of type string can be" for="json_configuration_<?php echo $apE ?>_posttype_create_type" style="margin:5px;">
                                            Type
                                        </label>
                                        <input title="Only properties of type string can be" name="json_configuration_<?php echo $apE ?>_posttype_create_type" id="json_configuration_<?php echo $apE ?>_posttype_create_type" value="String" disabled>

                                        <label title="If there are levels deep use the ':' like this: 'properties:action:remember'" for="json_configuration_<?php echo $apE ?>_posttype_create_name" style="margin:5px;">
                                            Name
                                        </label>
                                        <input title="If there are levels deep use the ':' like this: 'properties:action:remember'" type="text" name="json_configuration_<?php echo $apE ?>_posttype_create_name" id="json_configuration_<?php echo $apE ?>_posttype_create_name">

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else if ($apE === "post_status") {
                    ?>
                        <div class="postype config <?php echo $apE ?>">
                            <i title="Arrow for <?php echo $apE ?>" class="material-icons arrowX despla <?php echo $apE ?>">keyboard_arrow_right</i>
                            <h4><?php echo $apE ?></h4>
                            <div class="content postype config arrow_<?php echo $apE ?>" style="display: none">
                                <h2><?php echo $apE ?></h2>
                                <label class="content-input" for="dynamic_status" style="margin: 10px">
                                    <input type="checkbox" name="dynamic_status" id="dynamic_status" checked>Dynamic Status <?php echo $apE ?>
                                    <i></i>
                                </label>
                                <div class="yes dynamic" id="status-yes-dynamyc">
                                    <div class="">
                                        <h3>What key of the json of the response will be in the <?php echo $apE ?></h3>
                                        <p>Note: You can only choose one property</p>
                                        <div>
                                            <div style="margin:5px;">
                                                <label title="Only properties of type string can be" for="json_configuration_<?php echo $apE ?>_posttype_create_type" style="margin:5px;">
                                                    Type
                                                </label>
                                                <input title="Only properties of type string can be" name="json_configuration_<?php echo $apE ?>_posttype_create_type" id="json_configuration_<?php echo $apE ?>_posttype_create_type" value="String" disabled>

                                                <label title="If there are levels deep use the ':' like this: 'properties:action:remember'" for="json_configuration_<?php echo $apE ?>_posttype_create_name" style="margin:5px;">
                                                    Name
                                                </label>
                                                <input title="If there are levels deep use the ':' like this: 'properties:action:remember'" type="text" name="json_configuration_<?php echo $apE ?>_posttype_create_name" id="json_configuration_<?php echo $apE ?>_posttype_create_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label class="content-input" for="no_dynamic_status">
                                    <input type="checkbox" name="no_dynamic_status" id="no_dynamic_status"> With this option, all posts will have the type of status that you define below if it does not agree with what you put above
                                    <i></i>
                                </label>
                                <div class="no dynamic" style="display: none;" id="status-no-dynamyc">
                                    <label for="no-dynamic-publish">Select option for status</label>
                                    <select name="no-dynamic-publish" id="no-dynamic-publish">
                                        <option disabled value="select status">select status</option>
                                        <option value="publish">Publish</option>
                                        <option value="future">Future</option>
                                        <option value="draft">Draft</option>
                                        <option value="pending">Tending</option>
                                        <option value="private">Private</option>
                                        <option value="trash">Trash</option>
                                        <option value="auto-draft">Auto Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else if ($apE === "post_type") {
                    ?>
                        <div class="postype config <?php echo $apE ?>">
                            <i title="Arrow for <?php echo $apE ?>" class="material-icons arrowX despla <?php echo $apE ?>">keyboard_arrow_right</i>
                            <h4><?php echo $apE ?></h4>
                            <div class="content postype config arrow_<?php echo $apE ?>" style="display: none">
                                <h2><?php echo $apE ?></h2>
                                <div class="">
                                    <h3>What key of the json of the response will be in the <?php echo $apE ?></h3>
                                    <p>Note 1: You can only choose one property</p>
                                    <p>Note 2: This property will be added to the post type list for query manipulation</p>
                                    <div>
                                        <div style="margin:5px;">
                                            <label title="Only properties of type string can be" for="json_configuration_<?php echo $apE ?>_posttype_create_type" style="margin:5px;">
                                                Type
                                            </label>
                                            <input title="Only properties of type string can be" name="json_configuration_<?php echo $apE ?>_posttype_create_type" id="json_configuration_<?php echo $apE ?>_posttype_create_type" value="String" disabled>

                                            <label title="If there are levels deep use the ':' like this: 'properties:action:remenber'" for="json_configuration_<?php echo $apE ?>_posttype_create_name" style="margin:5px;">
                                                Name
                                            </label>
                                            <input title="If there are levels deep use the ':' like this: 'properties:action:remenber'" type="text" name="json_configuration_<?php echo $apE ?>_posttype_create_name" id="json_configuration_<?php echo $apE ?>_posttype_create_name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else if ($apE === "featured_image") {
                    ?>
                        <div class="postype config dynamic <?php echo $apE ?>">
                            <i title="Arrow for <?php echo $apE ?>" class="material-icons arrowX despla <?php echo $apE ?>">keyboard_arrow_right</i>
                            <h4><?php echo $apE ?></h4>
                            <div class="content postype config arrow_<?php echo $apE ?>" style="display: none">
                                <h2><?php echo $apE ?></h2>
                                <h3>What key of the json of the response will be in the <?php echo $apE ?></h3>
                                <div>
                                    <div class="multiples_json_properties_configurations_<?php echo $apE ?>" style="margin:5px;">
                                        <label title="Only properties of type string can be" for="json_configuration_<?php echo $apE ?>_posttype_create_type" style="margin:5px;">
                                            Type
                                        </label>
                                        <input title="Only properties of type string can be" name="json_configuration_<?php echo $apE ?>_posttype_create_type" id="json_configuration_<?php echo $apE ?>_posttype_create_type" value="String" disabled>

                                        <label title="If there are levels deep use the ':' like this: 'properties:action:remember'" for="json_configuration_<?php echo $apE ?>_posttype_create_name" style="margin:5px;">
                                            Name
                                        </label>
                                        <input title="If there are levels deep use the ':' like this: 'properties:action:remember'" type="text" name="json_configuration_<?php echo $apE ?>_posttype_create_name" id="json_configuration_<?php echo $apE ?>_posttype_create_name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>

                        <div class="postype config dynamic <?php echo $apE ?>">
                            <i title="Arrow for <?php echo $apE ?>" class="material-icons arrowX despla <?php echo $apE ?>">keyboard_arrow_right</i>
                            <h4><?php echo $apE ?></h4>
                            <div class="content postype config arrow_<?php echo $apE ?>" style="display: none">
                                <h2><?php echo $apE ?></h2>
                                <h3>What key of the json of the response will be in the <?php echo $apE ?></h3>
                                <p>Note: the properties that you add will be attached to the post in that same order</p>
                                <label>
                                    How many keys will be used here <input id="input_number_types_<?php echo $apE ?>" type="number" value="0">
                                </label>
                                <div>
                                    <div class="multiples_json_properties_configurations_<?php echo $apE ?>" style="margin:5px;"></div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }

                ?>
                <button type="submit" class="button-secondary">Save</button>
            </form>
        </div>
        <div class="image val" style="display: none;">
            <form action="" method="post">
                <input type="hidden" name="form_todo" value="image-save">
                <input type="hidden" name="id_api" id="id_api_edit">
                <input type="hidden" name="id_query" id="id_query_edit">
                <input type="hidden" name="endpoint_api" id="endpoint_api_edit">
                <div class="postype config dynamic save-image">
                    <i title="Arrow for save-image" class="material-icons arrowX despla save-image">keyboard_arrow_right</i>
                    <h4>Save Image</h4>
                    <div class="content postype config arrow_save-image" style="display: none">
                        <h2>Save Image</h2>
                        <h3>What Key of the json of the response will be in the save image</h3>
                        <p>Note: The images will be saved in the root path by default of wordpress</p>
                        <label>
                            How many keys will be used here <input id="input_number_types_save-image" name="input_number_types_save-image" type="number" value="0">
                        </label>
                        <div>
                            <div class="multiples_json_properties_configurations_save-image" style="margin:5px;"></div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="button-secondary">Save</button>
            </form>
        </div>
    </div>
</div>
<script>
    let postTypeAttributesWAl = ["post_author", "post_name", "post_title", "post_content", "post_category"];
    let postTypeAttributes = ["post_author", "post_name", "post_title", "post_content", "post_status", "post_type", "post_category", "featured_image", "next"]

    postTypeAttributesWAl.forEach(el => {
        document.querySelector(`#input_number_types_${el}`).addEventListener("change", (e) => {
            rellenar(e.target.value, el)
        })
    })

    let countPostTypeArrow = 0
    postTypeAttributes.forEach(elem => {

        document.querySelector(`.material-icons.arrowX.despla.${elem}`).addEventListener("click", (e) => {
            if (countPostTypeArrow > 1) {
                countPostTypeArrow = 0
            }
            if (countPostTypeArrow == 0) {
                document.querySelector(`.content.postype.config.arrow_${elem}`).style.display = 'block'
                e.target.innerHTML = "keyboard_arrow_down"
            } else {
                document.querySelector(`.content.postype.config.arrow_${elem}`).style.display = 'none'
                e.target.innerHTML = "keyboard_arrow_right"
            }
            countPostTypeArrow++
            console.log(countPostTypeArrow)
        })
    })


    document.querySelector("#no_dynamic_status").addEventListener('change', (e) => {
        let isCheck = e.target.checked
        if (isCheck) {
            document.querySelector("#status-no-dynamyc").style.display = "block" //dynamic_status
            document.querySelector("#status-yes-dynamyc").style.display = "none" //dynamic_status
            document.querySelector("#dynamic_status").checked = false //dynamic_status
        } else {
            document.querySelector("#status-no-dynamyc").style.display = "none" //dynamic_status
            document.querySelector("#status-yes-dynamyc").style.display = "block" //dynamic_status
            document.querySelector("#dynamic_status").checked = true //dynamic_status
        }
    })

    document.querySelector("#dynamic_status").addEventListener('change', (e) => {
        let isCheck = e.target.checked
        if (isCheck) {
            document.querySelector("#status-no-dynamyc").style.display = "none" //dynamic_status
            document.querySelector("#status-yes-dynamyc").style.display = "block" //dynamic_status
            document.querySelector("#no_dynamic_status").checked = false //dynamic_status
        } else {
            document.querySelector("#status-no-dynamyc").style.display = "block" //dynamic_status
            document.querySelector("#status-yes-dynamyc").style.display = "none" //dynamic_status
            document.querySelector("#no_dynamic_status").checked = true //dynamic_status
        }
    })

    document.querySelector("#is_next").addEventListener('change', (e) => {
        let isCheck = e.target.checked
        if (isCheck) {
            document.querySelector("#next_property_yes").style.display = "block"
        } else {
            document.querySelector("#next_property_yes").style.display = "none"
        }
    })
</script>

<script>
    let imageContainer = document.querySelector(".image.val")
    let postTypeContainer = document.querySelector(".posttype.json")

    const EnumTb = Object.freeze({
        JSON: "jsonPC",
        SAVEIMG: "saveImage",
        NONE: "none"
    })

    function btnEndpointsEdit(id, queries, nameEndpoint, urlBase) {

        let containerQueries = document.querySelector(".endpoints#querysd");
        let containerDivQueries = document.querySelector(".endpoints#querysd div");
        document.querySelector(".endpoints#querysd h3").innerHTML = `Query's for ${nameEndpoint}`;

        let elementQueries = ``;


        document.querySelector("#endpoint_api").value = nameEndpoint
        document.querySelector("#endpoint_api_edit").value = nameEndpoint


        let queriesS = convertArrayQueryToString(queries)

        queries.forEach((e, index, array) => {
            console.log(e)
            let jsonProperty = convertJsonPropertiesToString(e, -1, array)

            elementQueries += `<div title="Press to configure this query '${e.query}'">
                    <button onclick="btnQuerySetUp(${jsonProperty}, '${urlBase}', '${nameEndpoint}')">${urlBase}/${nameEndpoint}?${e.query}=${e.value}</button>
                </div>`
        })

        containerDivQueries.innerHTML = elementQueries
        containerQueries.style.display = "block"
    }

    function btnQuerySetUp(query, urlBase, nameEndpoint) {
        let tileQuery = document.querySelector(".connection_api.configurationToDoEndpoints.container")
        let tileQueryTime = document.querySelector(".connection_api.configurationToDoEndpoints.container .query h3")

        tileQueryTime.innerHTML = `${urlBase}/${nameEndpoint}?${query.query}=${query.value}`

        //TODO Definir
        document.querySelector("#id_query").value = query.id
        document.querySelector("#id_query_edit").value = query.id

        tileQuery.style.display = "block"

        if (query.action || query.action.type || query.action.actions) {
            if (query.action.type === EnumTb.JSON) {
                createPostJsonSee(query.action, query.id)
            } else if (query.action.type === EnumTb.SAVEIMG) {
                saveImageSee(query.action)
            } else if(query.action.type === EnumTb.NONE) {
                imageContainer.style.display = "none"
                postTypeContainer.style.display = "none"
                document.querySelector("#actionTodoEndpoint").value = "endp"
            }
        }
    }

    function createPostJsonSee(actions, id) {
        //TODO: Implementar el llenado de INPUTS

        postTypeSeeEdit(actions, id)

        document.querySelector("#actionTodoEndpoint").value = "post-type"
        imageContainer.style.display = "none"
        postTypeContainer.style.display = "block"
    }

    function saveImageSee(actions) {
        //TODO: Implementar el llenado de INPUTS

        seeSaveImage(actions)

        document.querySelector("#actionTodoEndpoint").value = "save-image"
        imageContainer.style.display = "block"
        postTypeContainer.style.display = "none"
    }

    function settingsEndpoints(id, nameApi, urlBase, endpoints) {
        let containerEndpoint = document.querySelector(".endpoints#initd");
        let containerDivEndpoint = document.querySelector(".endpoints#initd div");
        let containerH3Endpoint = document.querySelector(".endpoints#initd h3");
        //<input type="hidden" name="id_api" id="id_api">
        //<input type="hidden" name="id_query" id="id_query">
        //<input type="hidden" name="endpoint_api" id="endpoint_api">

        document.querySelector("#id_api").value = id
        document.querySelector("#id_api_edit").value = id

        let elementEndpoints = ``;

        containerH3Endpoint.innerHTML = `Endpoints for ${nameApi}:`

        endpoints.forEach((e, index) => {
            let endpointNameProv = e.endpoint
            let endpointQueriesProv = e.queries
            let strQueriesProvS = convertArrayQueryToString(endpointQueriesProv)

            elementEndpoints += `<div title="Press to configure this endpoint '${endpointNameProv}'">
                                    <button onclick="btnEndpointsEdit(${id}, ${strQueriesProvS}, '${endpointNameProv}', '${urlBase}')">${endpointNameProv}</button>
                                </div>`
        })

        containerDivEndpoint.innerHTML = elementEndpoints

        containerEndpoint.style.display = "block"
    }

    document.querySelector("#actionTodoEndpoint").addEventListener("change", e => {
        let select = e.target.value

        if (select === "post-type") {
            imageContainer.style.display = "none"
            postTypeContainer.style.display = "block"
        } else if (select === "save-image") {
            postTypeContainer.style.display = "none"
            imageContainer.style.display = "block"
        }

    })

    function convertArrayQueryToString(arrayS) {
        let strQueriesProv = `[`;

        arrayS.forEach((e, index, array) => {
            strQueriesProv += convertJsonPropertiesToString(e, index, array)
        })

        strQueriesProv += `]`;

        return strQueriesProv
    }

    function convertJsonPropertiesToString(e, index, array) {
        let actions = ``
        let actionsQ = true;
        let strQuery = ``
        if (e.action.type === EnumTb.JSON) {
            actions += convertJsonPostCreateToString(e.action.actions)
        } else if (e.action.type === EnumTb.SAVEIMG) {
            actions += convertSaveImageArrayToString(e.action.actions)
        } else if (e.action.type === EnumTb.NONE) {
            actionsQ = false
        }

        if (index === (array.length - 1) || index === -1) {
            strQuery += `{
                id: '${e.id}',
                                          query: '${e.query}',
                                          value: '${e.value}',
                                          type: '${e.type}',
                                          routeResponse: '${e.routeResponse}',
                                          typeResponse: '${e.typeResponse}',
                                          action: {
                                            type: '${e.action.type}',
                                            ${actionsQ ? `actions: ${actions}` : ""}
                                          }
                                    }`
        } else {
            strQuery += `{
                id: '${e.id}',
                                          query: '${e.query}',
                                          value: '${e.value}',
                                          type: '${e.type}',
                                          routeResponse: '${e.routeResponse}',
                                          typeResponse: '${e.typeResponse}',
                                          action: {
                                            type: '${e.action.type}',
                                            ${actionsQ ? `actions: ${actions}` : ""}
                                          }
                                   },`
        }
        return strQuery
    }

    function convertJsonPostCreateToString(obj) {
        let actionA = `{
            comment_status: ${obj.comment_status},
            featured_image: '${obj.featured_image}',
            post_status: {
                dynamic: ${obj.post_status.dynamic},
                type: '${obj.post_status.type}',
                value: '${obj.post_status.value}'
            },
            post_type: {
                type: '${obj.post_type.type}',
                value: '${obj.post_type.value}'
            },
            next : {
                exist: ${obj.next.exist},
                route: '${obj.next.route}'
            },
            post_author: [
        `
        obj.post_author.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    }
                `
            } else {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    },
                `
            }
        })

        actionA += `],
            post_name: [
        `
        obj.post_name.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    }
                `
            } else {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    },
                `
            }
        })
        actionA += `],
            post_category: [
        `
        obj.post_category.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    }
                `
            } else {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    },
                `
            }
        })
        actionA += `],
            post_title: [
        `
        obj.post_title.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    }
                `
            } else {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    },
                `
            }
        })
        actionA += `],
            post_content: [
        `
        obj.post_content.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    }
                `
            } else {
                actionA += `
                    {
                        type: '${e.type}',
                        value: '${e.value}'
                    },
                `
            }
        })
        actionA += `]}`

        return actionA
    }

    function convertSaveImageArrayToString(obj) {
        let saveImage = `[`

        obj.forEach((e, index, array) => {
            if (index === (array.length - 1)) {
                saveImage += convertSaveImageToString(e)
            } else {
                saveImage += `${convertSaveImageToString(e)},`
            }
        })

        saveImage += `]`

        return saveImage;
    }

    function convertSaveImageToString(obj) {
        return `
            {
                route: '${obj.route}',
                save: ${obj.save},
                type: '${obj.type}'
            }
        `
    }
</script>

<script>
    let countSaveImageValue = 0
    document.querySelector(".material-icons.arrowX.despla.save-image").addEventListener("click", (e) => {
        if (countSaveImageValue > 1) {
            countSaveImageValue = 0
        }
        if (countSaveImageValue == 0) {
            document.querySelector(`.content.postype.config.arrow_save-image`).style.display = 'block'
            e.target.innerHTML = "keyboard_arrow_down"
        } else {
            document.querySelector(`.content.postype.config.arrow_save-image`).style.display = 'none'
            e.target.innerHTML = "keyboard_arrow_right"
        }
        countSaveImageValue++
    })

    function seeSaveImage(action) {
        let long = action.actions.length
        document.querySelector("#input_number_types_save-image").value = long
        addFormSaveImage()
        action.actions.forEach((e, indexM, array) => {
            document.querySelector(`#json_configuration_save-image_posttype_create_name_${indexM+1}`).value = e.route //json_configuration_save-image_posttype_create_type_${index+1}
            document.querySelector(`#json_configuration_save-image_posttype_create_type_${indexM+1}`).value = e.type
        })
    }

    document.querySelector("#input_number_types_save-image").addEventListener("change", (e) => {
        addFormSaveImage()
    })

    function addFormSaveImage() {
        let number = document.querySelector("#input_number_types_save-image").value
        let addElements = "";
        for (let index = 0; index < number; index++) {
            addElements += `<div class="inputs_dynamic_json">
                        <label title="You can only add url of type String" for="json_configuration_save-image_posttype_${index+1}" style="margin:5px;">
                            Type
                        </label>
                        <select title="You can only add url of type String" name="json_configuration_save-image_posttype_create_type_${index+1}" id="json_configuration_save-image_posttype_create_type_${index+1}">
                            <option value="string" selected>String</option>
                            <option value="arrayString" title="If the property is of type array, remember to put '?' array?propertiesToTraverse">Array String</option>
                        </select>
                        <label title="If there are levels deep use the ':' like this: 'properties:action:remember'" for="json_configuration_save-image_posttype_create_name_${index+1}" style="margin:5px;">
                            Name
                        </label>
                        <input title="If there are levels deep use the ':' like this: 'properties:action:remember'" type="text" name="json_configuration_save-image_posttype_create_name_${index+1}" id="json_configuration_save-image_posttype_create_name_${index+1}">
                    </div>`
        }

        document.querySelector(".multiples_json_properties_configurations_save-image").innerHTML = addElements
    }
</script>

<script>
    let posTypeArrayA = ["post_author", "post_name", "post_title", "post_content", "post_category"];

    function postTypeSeeEdit(obj) {
        //FIXME: Comment Status
        document.querySelector("#comment_on").checked = obj.actions.comment_status
        //FIXME: Post Status
        if (obj.actions.post_status.dynamic) {
            document.querySelector("#dynamic_status").checked = true
            document.querySelector("#status-no-dynamyc").style.display = "none" //dynamic_status
            document.querySelector("#status-yes-dynamyc").style.display = "block" //dynamic_status
            document.querySelector("#no_dynamic_status").checked = false //dynamic_status
            document.querySelector("#json_configuration_post_status_posttype_create_name").value = obj.actions.post_status.value
        } else {
            document.querySelector("#dynamic_status").checked = false
            document.querySelector("#status-no-dynamyc").style.display = "block" //dynamic_status
            document.querySelector("#status-yes-dynamyc").style.display = "none" //dynamic_status
            document.querySelector("#no_dynamic_status").checked = true //dynamic_status
        }

        //FIXME: Post Type
        document.querySelector("#json_configuration_post_type_posttype_create_name").value = obj.actions.post_type.value

        //FIXME: Feaured Image
        document.querySelector("#json_configuration_featured_image_posttype_create_name").value = obj.actions.featured_image

        //FIXME: Next
        if (obj.actions.next.exist) {
            document.querySelector("#is_next").checked = true
            document.querySelector("#json_configuration_next_posttype_create_name").value = obj.actions.next.route
            document.querySelector("#next_property_yes").style.display = "block"
        }

        posTypeArrayA.forEach((e) => {
            let leng = obj.actions[e].length
            document.querySelector(`#input_number_types_${e}`).value = leng
            rellenar2(e, obj.actions[e])
        })


        console.log("PostTypesSeeEdit", obj.actions)
    }

    function rellenar(e, el) {
        let optionSelect;

        if (el === "post_category") {
            optionSelect = `<option value="string">String</option><option value="arrayString">Array String</option>`
        } else if (el === "post_content") {
            optionSelect = `
            <option value="string">String</option>
            <option value="number">Number</option>
            <option value="bool">Boolean</option>
            <option value="img">Image</option>
            <option value="video" title="if you choose video keep in mind that you will need Video-Js">Video</option>
            <option value="arrayInt">Array Int</option>
            <option value="arrayString">Array String</option>
            <option value="arrayBoolean">Array Boolean</option>
            <option value="arrayImage">Array Image</option>
            <option value="arrayVideo" title="if you choose video keep in mind that you will need Video-Js">Array Video</option>`
        } else {
            optionSelect = `
            <option value="string">String</option>
            <option value="number">Number</option>
            <option value="bool">Boolean</option>
            <option value="arrayInt">Array Int</option>
            <option value="arrayString">Array String</option>
            <option value="arrayBoolean">Array Boolean</option>`
        }
        let number = document.querySelector(`#input_number_types_${el}`).value
        let addElements = `
                    <div class="inputs_dynamic_json">
                        <label title="If the type is Array'any' they will be added linearly" for="json_configuration_${el}_posttype_${(number-1)}" style="margin:5px;">
                            Type
                        </label>
                        <select title="If the type is Array'any' they will be added linearly" name="json_configuration_${el}_posttype_create_type_${(number-1)}" id="json_configuration_${el}_posttype_create_type_${(number-1)}">
                            ${optionSelect}
                        </select>
                        <label title="If there are levels deep use the ':' like this: 'properties:action:remenber'" for="json_configuration_${el}_posttype_create_name_${(number-1)}" style="margin:5px;">
                            Name
                        </label>
                        <input title="If there are levels deep use the ':' like this: 'properties:action:remenber'" type="text" name="json_configuration_${el}_posttype_create_name_${(number-1)}" id="json_configuration_${el}_posttype_create_name_${(number-1)}">
                    </div>
                    `

        document.querySelector(`.multiples_json_properties_configurations_${el}`).innerHTML += addElements
    }

    function rellenar2(el, action) {
        let number = action.length
        let addElements = "";
        for (let index = 0; index < number; index++) {
            let optionSelect;
            if (el === "post_category") {
                optionSelect = `<option value="string" ${(action[index]).type === "string" ? "selected" : ""}>String</option><option value="arrayString" ${(action[index]).type === "arrayString" ? "selected" : ""}>Array String</option>`
            } else if (el === "post_content") {
                optionSelect = `
                    <option value="string" ${(action[index]).type === "string" ? "selected" : ""}>String</option>
                    <option value="number" ${(action[index]).type === "number" ? "selected" : ""}>Number</option>
                    <option value="bool" ${(action[index]).type === "bool" ? "selected" : ""}>Boolean</option>
                    <option value="img" ${(action[index]).type === "img" ? "selected" : ""}>Image</option>
                    <option value="video" title="if you choose video keep in mind that you will need Video-Js" ${(action[index]).type === "video" ? "selected" : ""}>Video</option>
                    <option value="arrayInt" ${(action[index]).type === "arrayInt" ? "selected" : ""}>Array Int</option>
                    <option value="arrayString" ${(action[index]).type === "arrayString" ? "selected" : ""}>Array String</option>
                    <option value="arrayBoolean" ${(action[index]).type === "arrayBoolean" ? "selected" : ""}>Array Boolean</option>
                    <option value="arrayImage" ${(action[index]).type === "arrayImage" ? "selected" : ""}>Array Image</option>
                    <option value="arrayVideo" title="if you choose video keep in mind that you will need Video-Js" ${(action[index]).type === "arrayVideo" ? "selected" : ""}>Array Video</option>`
            } else {
                optionSelect = `
                    <option value="string" ${(action[index]).type === "string" ? "selected" : ""}>String</option>
                    <option value="number" ${(action[index]).type === "number" ? "selected" : ""}>Number</option>
                    <option value="bool" ${(action[index]).type === "bool" ? "selected" : ""}>Boolean</option>
                    <option value="arrayInt" ${(action[index]).type === "arrayInt" ? "selected" : ""}>Array Int</option>
                    <option value="arrayString" ${(action[index]).type === "arrayString" ? "selected" : ""}>Array String</option>
                    <option value="arrayBoolean" ${(action[index]).type === "arrayBoolean" ? "selected" : ""}>Array Boolean</option>`
            }
            addElements = addElements + `
                    <div class="inputs_dynamic_json">
                        <label title="If the type is Array'any' they will be added linearly" for="json_configuration_${el}_posttype_${index}" style="margin:5px;">
                            Type
                        </label>
                        <select title="If the type is Array'any' they will be added linearly" name="json_configuration_${el}_posttype_create_type_${index}" id="json_configuration_${el}_posttype_create_type_${index}">
                            ${optionSelect}
                        </select>
                        <label title="If there are levels deep use the ':' like this: 'properties:action:remenber'" for="json_configuration_${el}_posttype_create_name_${index}" style="margin:5px;">
                            Name
                        </label>
                        <input title="If there are levels deep use the ':' like this: 'properties:action:remenber'" type="text" name="json_configuration_${el}_posttype_create_name_${index}" id="json_configuration_${el}_posttype_create_name_${index}" value="${action[index].value}">
                    </div>
                    `
        }
        document.querySelector(`.multiples_json_properties_configurations_${el}`).innerHTML = ""
        document.querySelector(`.multiples_json_properties_configurations_${el}`).innerHTML = addElements
    }
</script>

<style>
    i.material-icons.arrowX.despla {
        color: var(--color-secondary);
    }

    i.material-icons.arrowX.despla:hover {
        cursor: pointer;
    }

    /* Estilos para el contenedor principal */
    .query {
        background-color: var(--color-background);
        padding: 10px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100px;
    }

    /* Estilos para el título */
    .query h3 {
        font-size: 24px;
        margin: 0;
        color: var(--color-primary);
    }

    /* Estilos para el contenedor de acción */
    .action {
        margin-top: 10px;
        background-color: var(--color-white);
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Estilos para el selector de acción */
    .selectCSS {
        font-size: 18px;
        padding: 5px;
        border: none;
        border-radius: 3px;
        background: var(--color-gradient-principal);
        color: var(--color-white);
        cursor: pointer;
    }

    /* Estilos para la opción deshabilitada */
    .selectCSS option {
        color: gray;
    }

    .selectCSS option[disabled] {
        color: var(--color-primary);
    }

    /* Estilos para los botones */
    .button-primary {
        background-color: var(--color-primary-buttons);
        color: var(--color-white);
    }

    .button-secondary {
        background-color: var(--color-secondary-buttons);
        color: var(--color-white);
    }

    .button-primary:hover,
    .button-secondary:hover {
        background-color: var(--color-hover-buttons);
    }

    .posttype.json form {
        width: 693px;
    }

    /* Comment Status */
    /* Estilos para el contenedor principal */
    .postype.config {
        background-color: var(--color-background);
        padding: 10px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: auto;
        width: 100%;
    }



    /* Estilos para el título */
    .postype.config h2 {
        font-size: 24px;
        margin: 0;
        color: var(--color-primary);
    }

    /* Estilos para la descripción */
    .postype.config h3 {
        font-size: 16px;
        margin: 0;
        color: var(--color-secondary);
    }

    /* Estilos para el contenido */
    .postype.config p {
        font-size: 16px;
        margin: 0;
        color: black;
    }

    /* Estilos para el contenedor de configuración */
    .postype.config {
        background-color: var(--color-white);
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }

    /* Estilos para el contenedor de configuración */
    .postype.config h2 {
        font-size: 20px;
        margin: 0;
        color: var(--color-primary);
        margin-right: 10px;
    }

    /* Estilos para el contenedor de configuración */
    .postype.config p {
        font-size: 18px;
        margin: 0;
        color: black;
    }

    /* Estilos para el input */
    .postype.config input {
        font-size: 16px;
        padding: 5px;
        border: none;
        border-radius: 3px;
        background: var(--color-gradient-principal);
        color: var(--color-white);
        cursor: pointer;
    }

    /* Estilos para el botón de guardar */
    .postype.config button {
        font-size: 16px;
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        background-color: var(--color-primary-buttons);
        color: var(--color-white);
        cursor: pointer;
    }

    /* Estilos para el botón de guardar al pasar el cursor */
    .postype.config button:hover {
        background-color: var(--color-hover-buttons);
    }

    /* Comment Status */
</style>

<style>
    .endpoints>div {
        width: 710px;
        display: flex;
        overflow: scroll;
    }

    .endpoints>div div button {
        padding: 15px;
        background: var(--color-gradient-principal);
        border-radius: 15px;
        border-color: transparent;
        color: white;
    }

    .endpoints>div div button:hover {
        cursor: pointer;
    }
</style>