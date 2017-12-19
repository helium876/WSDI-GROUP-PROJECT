<?php session_start();?>
            <div class="w3layouts_header">
				<p><span><i class="fa fa-home" aria-hidden="true"></i></span></p>
				<h5>Add Property</h5>
			</div>
            <div class="w3layouts_skills_grids agileinfo_mail_grids">
                <form action="model/updateproperty.php" method="post" class="propForm" enctype="multipart/form-data">
                <input type="text" name="pid"  value="<?php echo $_SESSION["prop_to_update"]["pid"];?>" hidden>
                <input type="text" name="oldPreview"  value="<?php echo $_SESSION["prop_to_update"]["preview"];?>" hidden>
                    <div class="container">
                        <div style="width: 500px !important;">
                    <span class="input input--chisato" style="margin-left: 23mm !important;">
                            <label class="custom-file">
                                <input type="file" id="file" class="custom-file-input input__field input__field--chisato" name="preview">
                                <span class="custom-file-control"></span>
                            </label>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">
                        
                            <input class="input__field input__field--chisato" name="prop_name" type="text" placeholder="" 
                                value="<?php echo $_SESSION["prop_to_update"]["prop_name"];?>"/>
                            <label class="input__label input__label--chisato" for="prop_name">
                                <span class="input__label-content input__label-content--chisato" data-content="A House">Property Name</span>
                            </label>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">
                            <select class="input__field input__field--chisato" name="prop_type">
                                <option value="<?php echo $_SESSION["prop_to_update"]["prop_type"];?>"><?php echo $_SESSION["prop_to_update"]["prop_type"];?></option>
                                <option value="Vacant Lot">Vacant Lot</option>
                                <option value="Residential">Residential</option>
                                <option value="Commercial">Commercial</option>
                            </select>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">       
                            <input class="input__field input__field--chisato" name="size" type="text" placeholder="" 
                            value="<?php echo $_SESSION["prop_to_update"]["size"];?>"/>
                            <label class="input__label input__label--chisato" for="size">
                                <span class="input__label-content input__label-content--chisato" data-content="xxx">Land Size</span>
                            </label>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">   
                            <select class="input__field input__field--chisato" name="build_type">
                                <option value="<?php echo $_SESSION["prop_to_update"]["build_type"];?>"><?php echo $_SESSION["prop_to_update"]["build_type"];?></option>
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
                    <span class="input input--chisato" style="margin-left: 23mm !important;">    
                            <select class="input__field input__field--chisato" name="bed_num">
                                <option value="<?php echo $_SESSION["prop_to_update"]["bed_num"];?>"><?php echo $_SESSION["prop_to_update"]["bed_num"];?></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3+">3+</option>
                            </select>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">   
                            <select class="input__field input__field--chisato" name="bath_num">
                                <option value="<?php echo $_SESSION["prop_to_update"]["bath_num"];?>"><?php echo $_SESSION["prop_to_update"]["bath_num"];?>"</option>
                                <option value="1">1</option>
                                <option value="1 1/2">1 1/2</option>
                                <option value="2">2</option>
                                <option value="3+">3+</option>
                            </select>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">    
                            <select class="input__field input__field--chisato" name="list_type">
                                <option value="<?php echo $_SESSION["prop_to_update"]["list_type"];?>"><?php echo $_SESSION["prop_to_update"]["list_type"];?></option>
                                <option value="Rent">Rent</option>
                                <option value="Purchase">Purchase</option>
                            </select>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">
                            <input class="input__field input__field--chisato" name="price" type="text" placeholder="" 
                            value="<?php echo $_SESSION["prop_to_update"]["price"];?>"/>
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

                    <span class="input input--chisato" style="margin-left: 23mm !important;">
                            <input class="input__field input__field--chisato" name="street1" type="text" placeholder="" 
                            value="<?php echo $_SESSION["prop_to_update"]["street1"];?>" data-type="loc"/>
                            <label class="input__label input__label--chisato" for="street1">
                                <span class="input__label-content input__label-content--chisato" data-content="Lot 0 Somewhere">Address 1</span>
                            </label>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">
                            <input class="input__field input__field--chisato" name="street2" type="text" placeholder="" 
                            value="<?php echo $_SESSION["prop_to_update"]["street2"];?>"data-type="loc"/>
                            <label class="input__label input__label--chisato" for="street2">
                                <span class="input__label-content input__label-content--chisato" data-content="A Place">Address 2</span>
                            </label>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">
                            <input class="input__field input__field--chisato" name="city" type="text" placeholder="" 
                            value="<?php echo $_SESSION["prop_to_update"]["city"];?>" data-type="loc"/>
                            <label class="input__label input__label--chisato" for="city">
                                <span class="input__label-content input__label-content--chisato" data-content="In A City">City</span>
                            </label>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">
                            <input class="input__field input__field--chisato" name="parish" type="text" placeholder="" 
                            value="<?php echo $_SESSION["prop_to_update"]["parish"];?>" data-type="loc"/>
                            <label class="input__label input__label--chisato" for="parish">
                                <span class="input__label-content input__label-content--chisato" data-content="Parish">St. Person</span>
                            </label>
                    </span>
                    <span class="input input--chisato" style="margin-left: 23mm !important;">
                            <input class="input__field input__field--chisato" name="country" type="text" placeholder="" 
                            value="<?php echo $_SESSION["prop_to_update"]["country"];?>" data-type="loc"/>
                            <label class="input__label input__label--chisato" for="country">
                                <span class="input__label-content input__label-content--chisato" data-content="Country">Troy</span>
                            </label>
                    </span>
                    </div>
                    </div>
                    <div class="container">
                    <input type="submit" value="Update" name="submit" style="margin-left: 24mm !important;">
                    </div>
                </form>
            </div>
        <script src="js/classie.js"></script>
<script>
	(function() {
		// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
		if (!String.prototype.trim) {
			(function() {
				// Make sure we trim BOM and NBSP
				var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
				String.prototype.trim = function() {
					return this.replace(rtrim, '');
				};
			})();
		}

		[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
			// in case the input is already filled..
			if( inputEl.value.trim() !== '' ) {
				classie.add( inputEl.parentNode, 'input--filled' );
			}

			// events:
			inputEl.addEventListener( 'focus', onInputFocus );
			inputEl.addEventListener( 'blur', onInputBlur );
		} );

		function onInputFocus( ev ) {
			classie.add( ev.target.parentNode, 'input--filled' );
		}

		function onInputBlur( ev ) {
			if( ev.target.value.trim() === '' ) {
				classie.remove( ev.target.parentNode, 'input--filled' );
			}
		}
	})();
</script>
