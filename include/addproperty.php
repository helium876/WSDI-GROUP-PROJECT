
            <div class="w3layouts_header">
				<p><span><i class="fa fa-home-o" aria-hidden="true"></i></span></p>
				<h5>Add Property</h5>
			</div>
            <div class="w3layouts_skills_grids agileinfo_mail_grids">
                <form action="model/addproperty.php" method="post" id="propForm">
                    <div class="container">
                    <span class="input input--chisato">
                        
                            <input class="input__field input__field--chisato" name="prop_name" type="text" placeholder="" />
                            <label class="input__label input__label--chisato" for="prop_name">
                                <span class="input__label-content input__label-content--chisato" data-content="A House">Property Name</span>
                            </label>
                    </span>
                    <span class="input input--chisato">
                            <select class="input__field input__field--chisato" name="prop_name">
                                <option value="title">**Property Type**</option>
                                <option value="Vacant Lot">Vacant Lot</option>
                                <option value="Residential">Residential</option>
                                <option value="Commercial">Commercial</option>
                            </select>
                    </span>
                    <span class="input input--chisato">       
                            <input class="input__field input__field--chisato" name="size" type="text" placeholder="" />
                            <label class="input__label input__label--chisato" for="size">
                                <span class="input__label-content input__label-content--chisato" data-content="xxx">Land Size</span>
                            </label>
                    </span>
                    <span class="input input--chisato">   
                            <select class="input__field input__field--chisato" name="build_type">
                                <option value="title">**Building Type**</option>
                                <option value="N/A">N/A</option>
                                <option value="Farm Land">Farm Land</option>
                                <option value="Housing">Housing</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Town House">Town House</option>
                                <option value="Plaza">Plaza</option>
                                <option value="Office Space">Office Space</option>
                                <option value="Other">Other</option>
                            </select>
                    </span>
                    <span class="input input--chisato">    
                            <select class="input__field input__field--chisato" name="bed_num">
                                <option value="title">**Number of Bedrooms**</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3+">3+</option>
                            </select>
                    </span>
                    <span class="input input--chisato">   
                            <select class="input__field input__field--chisato" name="bath_num">
                                <option value="title">**Number of Bathrooms**</option>
                                <option value="1">1</option>
                                <option value="1 1/2">1 1/2</option>
                                <option value="2">2</option>
                                <option value="3+">3+</option>
                            </select>
                    </span>
                    <span class="input input--chisato">    
                            <select class="input__field input__field--chisato" name="list_type">
                                <option value="title">**Listing Type**</option>
                                <option value="Rent">Rent</option>
                                <option value="Purchase">Purchase</option>
                            </select>
                    </span>
                    <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="price" type="number" placeholder="" />
                            <label class="input__label input__label--chisato" for="price">
                                <span class="input__label-content input__label-content--chisato" data-content="xxx">Price</span>
                            </label>
                    </span>
                            <br>
                            <hr>
                            <div class="w3layouts_header">
                                <h5>Location</h5>
                            </div>
                            <br>

                    <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="street1" type="text" placeholder="" />
                            <label class="input__label input__label--chisato" for="street1">
                                <span class="input__label-content input__label-content--chisato" data-content="Lot 0 Somewhere">Address 1</span>
                            </label>
                    </span>
                    <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="street2" type="text" placeholder="" />
                            <label class="input__label input__label--chisato" for="street2">
                                <span class="input__label-content input__label-content--chisato" data-content="A Place">Address 2</span>
                            </label>
                    </span>
                    <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="city" type="text" placeholder="" />
                            <label class="input__label input__label--chisato" for="city">
                                <span class="input__label-content input__label-content--chisato" data-content="In A City">City</span>
                            </label>
                    </span>
                    <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="parish" type="text" placeholder="" />
                            <label class="input__label input__label--chisato" for="parish">
                                <span class="input__label-content input__label-content--chisato" data-content="St. Person">Parish</span>
                            </label>
                    <br><br><br><br>
                            <input class="input__field input__field--chisato" name="country" type="text" placeholder="" />
                            <label class="input__label input__label--chisato" for="country">
                                <span class="input__label-content input__label-content--chisato" data-content="Troy">Country</span>
                            </label>
                    </span>
                    </div>
                    <div class="container">
                    <input type="submit" value="Add Property" name="submit"> <a href="#" style="margin-left: 2mm !important;">Cancel</a>
                    </div>
                </form>
            </div>
        