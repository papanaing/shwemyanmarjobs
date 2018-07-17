var app = new Vue({
			
			el: '#myapp',
			data: { 
				jobsArr : [],
				jobAg: [],
				jobAgAll: [],
				jobAgLogo: [],
				jobCat: "",
				jobCity: "",
				jobType: "",
				datePosted: "",
				searchJob: "",
				filterCity : [],
				filterCate : [],
				filterTime : [],
				filterTime : [],
				filterDate : [],
				numberOfItemToShow : 20
			},
			computed: {
				filterAgencyJob: function(){
					// Search
					let self = this;

					let searchResult = this.jobAgAll.filter(function(eachJob){
					
						if(eachJob.job_position1.toLowerCase().indexOf(self.searchJob.toLowerCase()) > -1){
							return true;
						}
						else{
							return false;
						}
					
					});
										
					let cityFilteredResult = searchResult.filter(function(eachJob){
					
						if(self.filterCity.indexOf(eachJob.job_city) >= 0 || self.filterCity == "") {
							return true;
							
						}
						else{
							return false;
						}
					});

					let cateFilteredResult = cityFilteredResult.filter(function(eachJob){
					
						if(self.filterCate.indexOf(eachJob.job_cate1) >= 0 || self.filterCate == "") {
							return true;
							
						}
						else{
							return false;
						}
					});

					let timeFilteredResult = cateFilteredResult.filter(function(eachJob){

						if(self.filterTime.indexOf(eachJob.job_type) >= 0 || self.filterTime == "") {
							return true;
							
						}
						else{
							return false;
						}
					});

					let dateFilteredResult = timeFilteredResult.filter(function(eachJob){

						var fullDate = moment().format("YYYY-MM-DD");

						//Current Date
						// var currentDate = new Date();
						// var CD = currentDate.getFullYear() + '-' + (currentDate.getMonth() + 1) + '-' + currentDate.getDate(); //console.log(2018-5-6);

						var currentDate = Date.parse(fullDate); //change second

			            var jobDate = Date.parse(eachJob.job_post_date2);
			            var timeDiff = currentDate - jobDate;
			            var daysDiff = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
			            // console.log(CDate);
			            // console.log(jobDate);
			            // console.log(timeDiff);
			            // console.log(daysDiff);
			            
						if(self.filterDate == "All" || self.filterDate == ""){
							
							return true;
							
							}
							if(self.filterDate.indexOf("Today") >= 0){
								if(eachJob.job_post_date2 == fullDate){
									return true;
								}else{
									return false;
								}
								
							}
							if(self.filterDate.indexOf("Past 2 Days") >= 0){
								if(daysDiff <= 2){
									return true;
								}else{
									return false;
								}
								
							}
							if(self.filterDate.indexOf("Past 7 Days") >= 0){
								if(daysDiff <= 7){
									return true;
								}else{
									return false;
								}
								
							}
							if(self.filterDate.indexOf("Past 30 Days") >= 0){
								if(daysDiff <= 30){
									return true;
								}else{
									return false;
								}
								
							}
						else{
							return false;
						}
						
						
					});

				return dateFilteredResult.slice(0, this.numberOfItemToShow);
			}
		},
		methods : {
			showMoreJobs : function() {
				this.numberOfItemToShow += 20;
			},
			getCateLink: function() {
				var showPageUrlData;
 
				(window.onpopstate = function () {
				    var match,
				        pl     = /\+/g,  // Regex for replacing addition symbol with a space
				        search = /([^&=]+)=?([^&]*)/g,
				        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
				        query  = window.location.search.substring(1);
			 
				    showPageUrlData = {};
				    while (match = search.exec(query))
				       showPageUrlData[decode(match[1])] = decode(match[2]);
				})();
			 
				this.filterCate.push(showPageUrlData.clickCategory);
			}

		},

		// from api or mysql (Created function)
		created: function() {
			
			let self = this;
			
			  // job category axios
			  axios.get('job-category.php')
			  .then(function (response) {
			    self.jobCat = response.data;
			    // console.log(response.data);
			  })
			  .catch(function (error) {
			    console.log(error);
			  });

			  // agency job axios
			  axios.get('job-agency.php')
			  .then(function (response) {
			    self.jobAg = response.data;
			    // console.log(response.data);
			  })
			  .catch(function (error) {
			    console.log(error);
			  });

			  // all agency job axios
			  axios.get('all-job-agency.php')
			  .then(function (response) {
			    self.jobAgAll = response.data;
			    // console.log(response.data);
			  })
			  .catch(function (error) {
			    console.log(error);
			  });

			  // job city axios
			  axios.get('job-city-location.php')
			  .then(function (response) {
			    self.jobCity = response.data;
			    // console.log(response.data);
			  })
			  .catch(function (error) {
			    console.log(error);
			  });

			  // job type job axios
			  axios.get('job-type.php')
			  .then(function (response) {
			    self.jobType = response.data;
			    // console.log(response.data);
			  })
			  .catch(function (error) {
			    console.log(error);
			  });

			  // date posted job axios
			  axios.get('date-posted.php')
			  .then(function (response) {
			    self.datePosted = response.data;
			    // console.log(response.data);
			  })
			  .catch(function (error) {
			    console.log(error);
			  });

			 this.getCateLink();
				  
		}


});

