@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                        <main>
                            <section>
                                
                                <h2>Get in Touch</h2>
                                <form>
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" required>
                    
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required>
                    
                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" required></textarea>
                    
                                    <input type="submit" value="Send">
                                </form>
                            </section>
                            <section>
                                <h2>Contact Information</h2>
                                <p><strong>Address:</strong> 123 Main Street, Anytown, USA</p>
                                <p><strong>Phone:</strong> (123) 456-7890</p>
                                <p><strong>Email:</strong> info@company.com</p>
                            </section>
                    </div>
                </div>
                <!-- /.container-fluid -->  

@endsection