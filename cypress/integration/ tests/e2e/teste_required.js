describe('teste required', function() {
  it('test if required', function() {
    cy.visit('http://localhost:8000')

})

it('test required fields', function() {

  cy.get('input[name="name"]').type("Gabriel");



  cy.get('input[name="telephone"]').type("316584562");
  cy.get('input[name="address"]').type("Rua street");
  cy.get('input[name="email"]').type("gabriel@lucas");
  cy.contains('Submit').click()
})


})
