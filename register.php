
<div class="container">
  <div class="row">
    <div class="col-6">

     <div class="card mt-5">
      <div class="card-header bg-primary text-white">
        <div class="h5">Create New User</div>
      </div>
      <div class="card-body">
       
              <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="password" class="form-control shadow-sm">
            </div>
            <div class="form-group">
              <label for="firstname">Full Name</label>
              <input type="text" name="firstname" id="firstname" placeholder="First Name" class="form-control">
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="form-control">
            </div>
            <div class="form-group">
             <button id="submit" class="btn btn-primary">Submit</button>
             <button id="login" class="btn btn-primary">Login</button>
            </div>
          
      </div>
     </div>
    </div>
  </div>
  </div>
 <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
  import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword  } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js";
  import { getDatabase, ref, set } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-database.js";
  import { getFirestore ,doc, setDoc} from "https://www.gstatic.com/firebasejs/9.10.0/firebase-firestore.js";

  
   const firebaseConfig = {
    apiKey: "AIzaSyAoSYSPz4XzyIeC0zBzGcYMyfChyvozjpk",
    authDomain: "ci4crud-9248a.firebaseapp.com",
    databaseURL: "https://ci4crud-9248a-default-rtdb.firebaseio.com",
    projectId: "ci4crud-9248a",
    storageBucket: "ci4crud-9248a.appspot.com",
    messagingSenderId: "938521680175",
    appId: "1:938521680175:web:1617303b40a640da7e69da",
    measurementId: "G-DSKZ73BD3D"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
 const auth = getAuth(app);

  
// Create New User
 document.getElementById('submit').addEventListener('click',function(){
  const email=document.getElementById('email').value
  const password=document.getElementById('password').value
 
  createUserWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed in 
    const user = userCredential.user;
//     const firstname=document.getElementById('firstname').value
//     const lastname=document.getElementById('lastname').value
//     function writeUserData(userId, firstname,lastname) {
//   const db = getDatabase();
  
//   set(ref(db, 'users/' + userId), {
//    email:userId,
//    firstname:firstname,
//    lastname:lastname
//   });
// }
    
    

    console.log ('created')
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    // ..
    console.log(errorCode + errorMessage);
  });
 })
 // Sign In
 document.getElementById('login').addEventListener('click',function(){
  const email=document.getElementById('email').value
  const password=document.getElementById('password').value
 
  signInWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed in 
    const user = userCredential.user;
    // ...
    console.log ('LoggedIn')
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    // ..
    console.log(errorCode + errorMessage);
  });
 })
 const db=getFirestore(app);
await setDoc(doc(db, "cities", "LA"), {
  name: "Los Angeles",
  state: "CA",
  country: "USA"
});
































  // const analytics = getAnalytics(app);
  // function register(){
  //   email=document.getElementById('email').value;
  //     password=document.getElementById('password').value;
  //       firstname=document.getElementById('firstname').value;
  //         lastname=document.getElementById('lastname').value;

  //         auth.createUserWithEmailAndPassword(email,password).then(function(){
  //            var user=auth.currentUser;
  //            var database_ref=database.ref();
  //            var user_data={
  //             email:email,
  //             firstname:firstname,
  //             lastname:lastname,
  //             last_login: Date.now(),
  //            }
  //            database_ref.child('user/'+user.uid).set(user_data)
  //            alert('user created'); 

  //         }).catch(function(error){
  //           var error_code=error.code;
  //           var error_message=error.message;

  //           alert(error_message);
  //         })





  // };


  // function validate_email(email){
  //   expression=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
  //   if(expression.test(email)==true){
  //     return true
  //   } else {
  //     return false
  //   }
  // }
  // function validate_password(password){
  //   if(password<6){
  //     return false
  //   }
  //   else{
  //     return true
  //   }
  // }
  //  function validate_field(){
  //   if(field==null){
  //     return false
  //   }
  //   if(field.length<=0){
  //     return false
  //   }
  //   else {
  //     return true
  //   }
  //  }


</script>
 