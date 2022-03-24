 <!-- Vendor JS Files -->
 <!-- Vendor JS Files -->
 <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
 <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

 <!-- Template Main JS File -->
 <script src="{{ asset('assets/js/main.js') }}"></script>
 <script src="{{ asset('assets/js/myscript.js') }}"></script>
 <script src="{{ asset('assets/js/raphael.js') }}"></script>
 <script src="{{ asset('assets/js/Treant.js') }}"></script>
 <script>

config = {
    container: "#tree-simple",
    connectors:{
        type: "step",

    },
    node: {
        HTMLclass: 'nodeExample1'
        }
};

parent_node = {
    text: { name: "Direktur Utama" },
};
// first
first_child = {
    parent: parent_node,
    text: { name: "Sekertaris Perusahaan" }
};
// second
second_row_child1 = {
    parent: first_child,
    text: { name: "Manager Apartemen" }
};
// first row
third_row_child1= {
    parent: second_row_child1,
    text: { name: "Supervisor" }
};
four_row_child1= {
    parent: third_row_child1,
    text: { name: "Resepsionis" }
};
four_row_child2= {
    parent: third_row_child1,
    text: { name: "House Keeping" }
};
four_row_child3= {
    parent: third_row_child1,
    text: { name: "Logistik" }
};
four_row_child4= {
    parent: third_row_child1,
    text: { name: "Marketing Apartemen" }
};
five_row_child1={
    parent: four_row_child2,
    text: { name: "House Keeping" }
};
five_row_child2={
    parent: four_row_child2,
    text: { name: "Room Attandant" }
};
five_row_child3={
    parent: four_row_child3,
    text: { name: "House Keeping" }
};
five_row_child4={
    parent: four_row_child3,
    text: { name: "Room Attandant" }
};
// second row
second_row_child2 = {
    parent: first_child,
    text: { name: "Manager Pemasaran" }
};

third2_row_child1={
    parent: second_row_child2,
    text: { name: "Marketing Property" }
}
third2_row_child2={
    parent: second_row_child2,
    text: { name: "Admin Marketing" }
}

// third row
second_row_child3 = {
    parent: first_child,
    text: { name: "Manager SDM" }
};
third3_row_child1 = {
    parent: second_row_child3,
    text: { name: "Security" }
};
// fourth row
second_row_child4 = {
    parent: first_child,
    text: { name: "Finance Control" }
};
third4_row_child1 = {
    parent: second_row_child4,
    text: { name: "Accounting" }
};
four4_row_child1 = {
    parent: third4_row_child1,
    text: { name: "Keuangan Apartemen" }
};
four4_row_child2 = {
    parent: third4_row_child1,
    text: { name: "Keuangan Mansion" }
};
four4_row_child3 = {
    parent: third4_row_child1,
    text: { name: "Keuangan Cafe/Kitchen" }
};
four4_row_child4 = {
    parent: third4_row_child1,
    text: { name: "Keuangan Building/Estate" }
};
// fifth row
second_row_child5 = {
    parent: first_child,
    text: { name: "Manager Building/Estate Manajemen" }
};
third5_row_child1 = {
    parent: second_row_child5,
    text: { name: "Teknisi MEP" }
};
simple_chart_config = [
    config,  parent_node,
    first_child, second_row_child1, second_row_child2,second_row_child3,second_row_child4,second_row_child5, third_row_child1, four_row_child1, four_row_child2, four_row_child3, four_row_child4, five_row_child1,five_row_child2, five_row_child3, five_row_child4,  third2_row_child1, third2_row_child2, third3_row_child1 , third4_row_child1, four4_row_child1, four4_row_child2, four4_row_child3, four4_row_child4,third5_row_child1
];
var my_chart = new Treant(simple_chart_config);

 </script>
