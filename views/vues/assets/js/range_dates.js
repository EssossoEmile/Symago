/**
 * Filter a column on a specific date range. Note that you will likely need 
 * to change the id's on the inputs and the columns in which the start and 
 * end date exist.
 *
 *  @name Date range filter
 *  @summary Filter the table based on two dates in different columns
 *  @author _guillimon_
 *
 *  @example
 *    $(document).ready(function() {
 *        var table = $('#example').DataTable();
 *         
 *        // Add event listeners to the two range filtering inputs
 *        $('#min').keyup( function() { table.draw(); } );
 *        $('#max').keyup( function() { table.draw(); } );
 *    } );
 */


$.fn.dataTable.ext.search.push(
                function( settings, data, dataIndex ) {
                    var array=[];
                    var today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1;
                    var yyyy = today.getFullYear();
                     
                    if (dd<10)
                    dd = '0'+dd;
                     
                    if (mm<10)
                    mm = '0'+mm;
                     
                                today = yyyy+'-'+mm+'-'+dd;
                     
                    if ($('#min').val() == '' && $('#max').val() == '') {
                    return true;
                    }
                     if ($('#min').val() != '' || $('#max').val() != '') {
                    var iMin_temp = $('#min').val();
                     if (iMin_temp == '') {
                       iMin_temp = '2009-01-23';
 
                     }
                     
                     var iMax_temp = $('#max').val();
                     if (iMax_temp == '') {
                      iMax_temp = '2015-05-01';
                       array.push(iMax_temp.substr(0,10));
                       
 
                    }
                     
                    var arr_min = iMin_temp.split("-");
                    var arr_max = iMax_temp.split("-");
                    var arr_date = data[1].split("-");
           
                            var iMin = new Date(arr_min[2], arr_min[0], arr_min[1], 0, 0, 0, 0);
                    var iMax = new Date(arr_max[2], arr_max[0], arr_max[1], 0, 0, 0, 0);
                    var iDate = new Date(arr_date[2], arr_date[0], arr_date[1], 0, 0, 0, 0);
                     
                    if ( iMin == "" && iMax == "" )
                    {
                        return true;
                    }
                    else if ( iMin == "" && iDate < iMax )
                    {
                        return true;
                    }
                    else if ( iMin <= iDate && "" == iMax )
                    {
                        return true;
                    }
                    else if ( iMin <= iDate && iDate <= iMax )
                    {
                        return true;
                    }
                                         
                    return false;
                    }
                }
            );
 
 