<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
  <?php
  include 'header.php';
  ?>
  </head>

            <!-- Body: Body -->       
            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <div class="border-0 mb-4">
                            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                                <h3 class="fw-bold mb-0">Create Invoice</h3>
                            </div>
                        </div>
                    </div> <!-- Row end  -->
                    <div class="row g-3">
                        <div class="col-12">
                          <div class="card print_invoice">
                            <div class="card-header border-bottom fs-4">
                              <h5 class="card-title mb-0 fw-bold">INVOICE</h5>
                            </div>
                            <div class="card-body">
                              <div class="card p-3">
                                <div class="border-bottom pb-2">
                                  <textarea class="form-control address">Jone Martin,
    2838 Oliverio Drive
    Allen, Kansas 66833
    Phone: (620) 528-2614
                                  </textarea>
                                  <div id="logo">
                                    <div id="logoctr">
                                      <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                                      <a href="javascript:;" id="save-logo" title="Save changes">Save</a> | <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                                      <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
                                    </div>
                                    <div id="logohelp">
                                      <input id="imageloc" type="text" size="50" value=""><br> (max width: 540px, max height: 100px)
                                    </div>
                                    <img id="image" src="assets/images/logo.svg" alt="logo" width="100">
                                  </div>
                                </div>
                                <div style="clear:both"></div>
                                <div class="customer mt-4">
                                  <textarea class="form-control customer-title">Widget Catalog</textarea>
                                  <table class="meta">
                                    <tbody>
                                      <tr>
                                        <td class="meta-head">Invoice #</td>
                                        <td><textarea class="form-control">000123</textarea></td>
                                      </tr>
                                      <tr>
                                        <td class="meta-head">Date</td>
                                        <td><textarea class="form-control" id="date">October 18, 2022</textarea></td>
                                      </tr>
                                      <tr>
                                        <td class="meta-head">Amount Due</td>
                                        <td>
                                          <div class="due">$1151.00</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div style="clear:both"></div>
                                <table class="items">
                                  <tbody>
                                    <tr>
                                      <th>Item</th>
                                      <th>Description</th>
                                      <th style="width: 140px;">Unit Cost</th>
                                      <th style="width: 70px;">Quantity</th>
                                      <th style="width: 140px;">Price</th>
                                    </tr>
                                    <tr class="item-row">
                                      <td class="item-name">
                                        <div class="delete-wpr"><textarea>Rado Watch</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div>
                                      </td>
                                      <td class="description">
                                        <textarea>Rado Watch for Ebazar (Oct. 1 - Oct. 30, 2022)</textarea>
                                      </td>
                                      <td><textarea class="cost">$594.00</textarea></td>
                                      <td><textarea class="qty">1</textarea></td>
                                      <td><span class="price">$594.00</span></td>
                                    </tr>
                                    <tr class="item-row">
                                      <td class="item-name">
                                        <div class="delete-wpr"><textarea>Flower Port</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div>
                                      </td>
                                      <td class="description"><textarea>Yearly Diwali of Flower Port gift on</textarea></td>
                                      <td><textarea class="cost">$199.00</textarea></td>
                                      <td><textarea class="qty">3</textarea></td>
                                      <td><span class="price">$557.00</span></td>
                                    </tr>
                                    <tr id="hiderow">
                                      <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" class="blank"> </td>
                                      <td colspan="2" class="total-line">Subtotal</td>
                                      <td class="total-value">
                                        <div id="subtotal">$1151.00</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" class="blank"> </td>
                                      <td colspan="2" class="total-line">Total</td>
                                      <td class="total-value">
                                        <div id="total">$1151.00</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" class="blank"> </td>
                                      <td colspan="2" class="total-line">Amount Paid</td>
                                      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" class="blank"> </td>
                                      <td colspan="2" class="total-line balance">Balance Due</td>
                                      <td class="total-value balance">
                                        <div class="due">$1151.00</div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <div style="clear:both"></div>
                                <div class="footer-note mt-5">
                                  <h5>Terms</h5>
                                  <textarea class="form-control bg-light">NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 text-center text-md-end">
                          <button type="button" class="btn btn-lg btn-primary" onclick="window.print();return false"><i class="fa fa-print me-2"></i>Print Invoice</button>
                          <button type="button" class="btn btn-lg btn-secondary"><i class="fa fa-envelope me-2"></i>Send PDF</button>
                        </div>
                    </div><!-- Row end  -->
                </div>
            </div>
            
            <?php
  include 'footer.php';
  ?>