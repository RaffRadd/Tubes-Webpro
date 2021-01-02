<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #000000; font-size:15px;">
        <a class="navbar-brand ml-5" href="<?php echo site_url('')?>">
            <img src="./images/GT.png" width="200" height="70" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <span class="mr-4">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" style="margin-left:0px;">
                        <a class="nav-link" href="<?php echo base_url('')?>">Home <span class="sr-only">(current)</span></a>
                    </li>			
                    <li class="nav-item" style="margin-left:0px;">
                        <a class="nav-link" href="<?php echo base_url('About')?>">About Us</a>
                    </li>
                    <li class="nav-item" style="margin-left:0px;">
                        <a class="nav-link" href="<?php echo base_url('services')?>">Services</a>
                    </li>
                    <li class="nav-item" style="margin-left:0px;">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item" style="margin-left:0px;">
                        <a class="nav-link" href="<?php echo site_url('contactUs')?>">Contact Us</a>
                    </li>							
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
            </span>
        </div>
    </nav>