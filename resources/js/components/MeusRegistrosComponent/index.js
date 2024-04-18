import styled, { keyframes } from "styled-components";

export const RegistrosContainer = styled.div`
    width: 100%;
    max-width: 900px;
    margin: 0 auto;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
`;

export const Registros = styled.div`
    width: 80%;
    height: auto;
    background: #f9f9f9;
    background: green;
    margin: 20px;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 25px;
`;

export const Text = styled.p`
    font-family: "Arial", sans-serif;
    font-size: 16px;
    line-height: 1.6;
    color: #333;
    background-color: #f9f9f9;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    max-width: 500px;
`;
